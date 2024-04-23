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

class GooglePlayComponent extends Component
{

    public $result = [],
        $platforms,
        $search_term,
        $search_response = [],
        $limit,
        $product_id,
        $api_key,
        $productName;

    public $platformCount = 7;
    public $serp_api_key;
    public $site;


    public function mount()
    {
        $user = auth()->user();
        $this->site = $user->sites()->first();

        $this->api_key = $this->site->serp_api_key ??  env('SERP_API_KEY');

        $this->platforms = Platform::all();

        if (session()->has('google_play_result')) {
            if (session()->has('google_play_result_expires_at') && Carbon::now()->gt(session()->get('google_play_result_expires_at'))) {
                session()->forget('google_play_result');
                session()->forget('google_play_result_expires_at');
                session()->forget('productName');
                session()->forget('product_id');
                $this->result = [];
            } else {
                $this->result = session()->get('google_play_result');
            }
        }

        if (session()->has('productName')) {
            $this->productName = session()->get('productName');
            $this->product_id = session()->get('product_id');
        }
    }
    public function searchData()
    {
        $this->validate([
            'search_term' => 'required|string',
        ]);

        $response = Http::get('https://serpapi.com/search.json?q=' . $this->search_term . '&engine=google_play&api_key=' . $this->api_key);
        $this->search_response = $response->json()['organic_results'][0]['items'];
    }

    public function setProduct($productName = null, $product_id = null)
    {
        session()->forget('productName');
        session()->forget('product_id');

        session()->put('productName', $productName);
        session()->put('product_id', $product_id);

        $this->productName = session()->get('productName');
        $this->product_id = session()->get('product_id');
        $this->search_response = [];
    }

    public function getReviews()
    {
        $this->validate([
            'productName' => 'required',
        ]);
        $limit = $this->limit ?? 10;
        $response = Http::get('https://serpapi.com/search.json?engine=google_play_product&store=apps&product_id=' . $this->product_id . '&all_reviews=true&platform=phone&sort_by=1&num=' . $limit . '&api_key=' . $this->api_key);


        if (isset($response->json()['error'])) {
            $this->result = []; 
            session()->flash('error', $response->json()['error']);
            return ;
        } else {
            $expirationTime = Carbon::now()->addMinutes(5);
            session()->put('google_play_result', $response->json()['reviews']);
            session()->put('google_play_result_expires_at', $expirationTime);
    
            return  $this->result = session()->get('google_play_result');
        }

    }
    public function saveDataToDatabase(){

        $existingPlatformsCount = Platform::all()->count();
        if ($existingPlatformsCount >= $this->platformCount) {
            throw new NotFoundHttpException('Maximum Platform limit reached for this resource.');
        }

        $platform = Platform::create([
            'name' => 'google_play',  
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
                'net_promote_ans' => (round($data['rating']) *2 ),
                'nps_comment_ans' =>  null,
                'star_question_ans' =>round($data['rating']) ,
                'review_platform_ans' => $data['snippet'],
                'likes' => $data['likes'],
                'video' => Cache::get('cloudinary_video_url') ?? null,
                'contact_info_ans' => [
                    'email' => null,
                    'location' => null,
                    'organisation' => null,
                    'image' => $data['avatar'] ?? null,
                ],
                
                'private_feed_back_ans' => [
                    'name' =>  $data['title'],
                    'email' => null,
                    'phonenumber' =>  null,
                    'message' => $data['snippet'] ?? null,
                ],
                'date'=> $data['date'] 
            ];
    
            $existingReviewsCount = Review::all()->count();
            if ($existingReviewsCount >= 100) {
                throw new NotFoundHttpException('Maximum review limit reached for this resource.');
            }
    
            $feedback = Review::create($data);

            if (session()->has('google_play_result')) {
                session()->forget('google_play_result');
            }

            session()->flash('success', 'imported successfully');
            
            $this->dispatch('refreshPage');
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
        return view('livewire.google-play-component');
    }
}
