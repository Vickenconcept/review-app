<?php

namespace App\Livewire;

use App\Models\Campaign;
use App\Models\Platform;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GoogleComponent extends Component
{

    public $result = [],
        $platforms,
        $search_term,
        $search_response = [],
        $limit,
        $product_id,
        $api_key,
        $productName;
    public $forProduct = true,
        $forMap = true;

    public $platformCount = 7;
    public $serp_api_key;
    public $site;


    public function mount()
    {
        $user = auth()->user();
        $this->site = $user->sites()->first();

        $this->api_key = $this->site->serp_api_key ??  env('SERP_API_KEY');

        $this->platforms = Platform::all();

        if (session()->has('google_result')) {
            if (session()->has('google_result_expires_at') && Carbon::now()->gt(session()->get('google_result_expires_at'))) {
                session()->forget('google_result');
                session()->forget('google_result_expires_at');
                session()->forget('G_productName');
                session()->forget('product_id');
                $this->result = [];
            } else {
                $this->result = session()->get('google_result');
            }
        }

        if (session()->has('G_productName')) {
            $this->productName = session()->get('G_productName');
            $this->product_id = session()->get('product_id');
        }
    }

    public function switchPage($page)
    {
        session()->forget('google_result');
        session()->forget('google_result_expires_at');
        session()->forget('G_productName');
        session()->forget('product_id');
        $this->productName = 'Place or product name ..';
        $this->result = [];
    }
    public function searchData()
    {
        $this->validate([
            'search_term' => 'required|string',
        ]);

        $response = Http::get('https://serpapi.com/search?q=' . $this->search_term . '&tbm=shop&api_key=' . $this->api_key);

        if (isset($response->json()['error'])) {
            $this->result = [];
            session()->flash('error', $response->json()['error']);
            return;
        } else {

            $this->search_response = $response->json()['shopping_results'];
        }
    }

    public function setProduct($productName = null, $product_id = null)
    {
        session()->forget('G_productName');
        session()->forget('product_id');

        session()->put('G_productName', $productName);
        session()->put('product_id', $product_id);

        $this->productName = session()->get('G_productName');
        $this->product_id = session()->get('product_id');
        $this->search_response = [];
    }

    public function getReviews()
    {
        $this->validate([
            'productName' => 'required',
        ]);

        $response = Http::get('https://serpapi.com/search.json?engine=google_product&store=apps&product_id=' . $this->product_id . '&gl=us&hl=en&num=&reviews=1&api_key=' . $this->api_key);

        if (isset($response->json()['error'])) {
            $this->result = [];
            session()->flash('error', $response->json()['error']);
            return;
        } else {
            // dd($response->json());
            if (isset($response->json()['reviews_results']['reviews'])) {
                $this->forMap = false;
                $expirationTime = Carbon::now()->addMinutes(5);
                session()->put('google_result', $response->json()['reviews_results']['reviews']);
                session()->put('google_result_expires_at', $expirationTime);
                session()->forget('G_productName');
                session()->forget('product_id');

                return  $this->result = session()->get('google_result');
            } else {
                $this->result = [];
                session()->flash('error', 'No review For this product');
            }
        }
    }

    public function saveDataToDatabase()
    {

        $existingPlatformsCount = Platform::all()->count();
        if ($existingPlatformsCount >= $this->platformCount) {
            throw new NotFoundHttpException('Maximum Platform limit reached for this resource.');
        }

        $platform = Platform::create([
            'name' => 'google',
        ]);

        $user = auth()->user();
        $siteId = $user->sites->first()->id;

        $campaign =  Campaign::create([
            'uuid' => Str::uuid()->toString(),
            'site_id' => $siteId,
            'widget_id' => 1,
            'platform_id' => $platform->id,
            'folder_id' => null,
            'name' => 'Campaign Name',
            'no_negative' => 1,
            'language' => 'English',
            'net_promote' => 'How likely are you to recommend our service to a friend or colleague?',
            'nps_comment' => 'What is the primary reason for your score?',
            'nps_comment_desc' => "Your feedback helps us improve. Could tell us more about your experience with us and why you chose this rating? Feel free to share your thoughts in as much detail as you wish. We're thankful for your input!",
            'star_question' => 'How would you rate our service?',
            'normal_review' => 'Please describe your experience with us.',
            'normal_review_desc' => 'Feel free to give your honest opinion and share your thoughts in as much detail as you wish. Your review will be a huge help to other people.',
            'review_platform' => 'Please take a moment to share your experience with us. Your feedback not only helps us, it helps other potential customers',
            'contact_info' => 'Tell us about yourself',
            'video_review' => 'Record a video review',
            'video_review_desc' => 'Leave a short video review. Feel free to give your honest opinion and share your thoughts in as much detail as you wish. ',
            'review_thanks' => 'Thank you for the review!',
            'review_thanks_desc' => 'We appreciate your review. You can close the survey now. Kind regards, [company_name:]',
            'private_feed_back' => 'Please let us know what was missing or disappointing in your experience with us.',
            'private_feed_back_desc' => 'Feel free to share your thoughts in as much detail as you wish. We are thankful for your input!',
            'private_feed_back_Thanks' => 'Thanks for the feedback!',
            'private_feed_back_Thanks_desc' => 'We appreciate your feedback. You can now close the survey. Kind regards, [company_name:]',
        ]);

        foreach ($this->result as $key => $data) {
            $data = [
                'site_id' => $campaign->site_id,
                'campaign_id' => $campaign->id,
                'uuid' => Str::uuid()->toString(),
                'net_promote_ans' => (round($data['rating']) * 2),
                'nps_comment_ans' =>  null,
                'star_question_ans' => round($data['rating']),
                'review_platform_ans' => $data['content'],
                'likes' => null,
                'video' => Cache::get('cloudinary_video_url') ?? null,
                'contact_info_ans' => [
                    'email' => null,
                    'location' => null,
                    'organisation' => null,
                    'image' =>  null,
                ],

                'private_feed_back_ans' => [
                    'name' =>  $data['source'],
                    'email' => null,
                    'phonenumber' =>  null,
                    'message' => $data['content'] ?? null,
                ],
                'date' => $data['date']
            ];

            $existingReviewsCount = Review::all()->count();
            if ($existingReviewsCount >= 100) {
                throw new NotFoundHttpException('Maximum review limit reached for this resource.');
            }

            $feedback = Review::create($data);

            if (session()->has('google_result')) {
                session()->forget('google_result');
            }

            session()->flash('success', 'imported successfully');

            $this->dispatch('refreshPage');
        }
    }


    public function saveMapDataToDatabase()
    {
        $existingPlatformsCount = Platform::all()->count();
        if ($existingPlatformsCount >= $this->platformCount) {
            throw new NotFoundHttpException('Maximum Platform limit reached for this resource.');
        }

        $platform = Platform::create([
            'name' => 'google',
        ]);

        $user = auth()->user();
        $siteId = $user->sites->first()->id;

        $campaign =  Campaign::create([
            'uuid' => Str::uuid()->toString(),
            'site_id' => $siteId,
            'widget_id' => 1,
            'platform_id' => $platform->id,
            'folder_id' => null,
            'name' => 'Campaign Name',
            'no_negative' => 1,
            'language' => 'English',
            'net_promote' => 'How likely are you to recommend our service to a friend or colleague?',
            'nps_comment' => 'What is the primary reason for your score?',
            'nps_comment_desc' => "Your feedback helps us improve. Could tell us more about your experience with us and why you chose this rating? Feel free to share your thoughts in as much detail as you wish. We're thankful for your input!",
            'star_question' => 'How would you rate our service?',
            'normal_review' => 'Please describe your experience with us.',
            'normal_review_desc' => 'Feel free to give your honest opinion and share your thoughts in as much detail as you wish. Your review will be a huge help to other people.',
            'review_platform' => 'Please take a moment to share your experience with us. Your feedback not only helps us, it helps other potential customers',
            'contact_info' => 'Tell us about yourself',
            'video_review' => 'Record a video review',
            'video_review_desc' => 'Leave a short video review. Feel free to give your honest opinion and share your thoughts in as much detail as you wish. ',
            'review_thanks' => 'Thank you for the review!',
            'review_thanks_desc' => 'We appreciate your review. You can close the survey now. Kind regards, [company_name:]',
            'private_feed_back' => 'Please let us know what was missing or disappointing in your experience with us.',
            'private_feed_back_desc' => 'Feel free to share your thoughts in as much detail as you wish. We are thankful for your input!',
            'private_feed_back_Thanks' => 'Thanks for the feedback!',
            'private_feed_back_Thanks_desc' => 'We appreciate your feedback. You can now close the survey. Kind regards, [company_name:]',
        ]);

        foreach ($this->result as $key => $data) {
            $data = [
                'site_id' => $campaign->site_id,
                'campaign_id' => $campaign->id,
                'uuid' => Str::uuid()->toString(),
                'net_promote_ans' => (round($data['rating']) * 2),
                'nps_comment_ans' =>  null,
                'star_question_ans' => round($data['rating']),
                'review_platform_ans' => $data['snippet'],
                'likes' => null,
                'video' => Cache::get('cloudinary_video_url') ?? null,
                'contact_info_ans' => [
                    'email' => null,
                    'location' => null,
                    'organisation' => null,
                    'image' =>  $data['user']['thumbnail'] ?? null,
                ],

                'private_feed_back_ans' => [
                    'name' =>  $data['user']['name'],
                    'email' => null,
                    'phonenumber' =>  null,
                    'message' => $data['snippet'] ?? null,
                ],
                'date' => $data['date'],
                'likes' => $data['likes'] ?? null
            ];

            $existingReviewsCount = Review::all()->count();
            if ($existingReviewsCount >= 100) {
                throw new NotFoundHttpException('Maximum review limit reached for this resource.');
            }

            $feedback = Review::create($data);

            if (session()->has('google_result')) {
                session()->forget('google_result');
            }

            session()->flash('success', 'imported successfully');

            $this->dispatch('refreshPage');
        }
    }


    public function searchMapData()
    {
        $this->validate([
            'search_term' => 'required|string',
        ]);

        $response = Http::get('https://serpapi.com/search.json?engine=google_maps&q=' . $this->search_term . '&type=search&api_key=' . $this->api_key);
        $this->search_response = $response->json()['local_results'];
    }

    public function setMapId($productName = null, $data_id = null)
    {
        session()->forget('G_productName');
        session()->forget('product_id');

        session()->put('G_productName', $productName);
        session()->put('product_id', $data_id);

        $this->productName = session()->get('G_productName');
        $this->product_id = session()->get('product_id');
        $this->search_response = [];
    }

    public function getMapReviews()
    {
        $this->validate([
            'productName' => 'required',
        ]);

        $this->product_id = '0x89c259a61c75684f:0x79d31adb123348d2';

        $response = Http::get('https://serpapi.com/search.json?engine=google_maps_reviews&data_id=' . $this->product_id . '&api_key=' . $this->api_key);

        if (isset($response->json()['error'])) {
            $this->result = [];
            session()->flash('error', $response->json()['error']);
            return;
        } else {

            if (isset($response->json()['search_information']['reviews_results_state'])) {
                $this->result = [];
                session()->flash('error', $response->json()['search_information']['reviews_results_state']);
                return;
            } else {
                if (isset($response->json()['reviews'])) {
                    $this->forProduct = false;
                    $expirationTime = Carbon::now()->addMinutes(5);
                    session()->put('google_result', $response->json()['reviews']);
                    session()->put('google_result_expires_at', $expirationTime);
                    session()->forget('G_productName');
                    session()->forget('product_id');

                    return  $this->result = session()->get('google_result');
                } else {
                    $this->result = [];
                    session()->flash('error', 'No review For this product');
                }
            }
        }
    }

    public function saveAPIKey()
    {
        $this->validate([
            'serp_api_key' => 'required',
        ]);

        $user = auth()->user();

        $user->sites()->first();
        $site = $user->sites()->first();

        $site->serp_api_key = $this->serp_api_key;
        $site->update();

        session()->flash('success', 'Updated successfully');

        $this->dispatch('refreshPage');
    }
    public function render()
    {
        return view('livewire.google-component');
    }
}
