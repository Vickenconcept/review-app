<?php

namespace App\Livewire;

use App\Models\Campaign;
use App\Models\Platform;
use App\Models\Review;
use Carbon\Carbon;
use Cloudinary\Cloudinary;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class YelpComponent extends Component
{

    use WithPagination;

    public $search_term,
        $location,
        $limit,
        $result = [],
        $platformCount = 7,
        $platforms,
        $yelp_api_key;

    public $api_key;
    public $site;



    public function mount()
    {
        $user = auth()->user();
        $this->site = $user->sites()->first();

        $this->api_key = $this->site->yelp_api_key ??  env('YELP_API_key');
        if (session()->has('yelp_result')) {
            if (session()->has('yelp_result_expires_at') && Carbon::now()->gt(session()->get('yelp_result_expires_at'))) {
                session()->forget('yelp_result');
                session()->forget('yelp_result_expires_at');
                $this->result = [];
            } else {
                $this->result = session()->get('yelp_result');
            }
        }
        $this->platforms = Platform::all();
    }
    public function searchData()
    {
        $this->validate([
            'search_term' => 'required|string',
            'location' => 'required',
        ]);

        $apiKey = $this->api_key;
        $url = 'https://api.yelp.com/v3/businesses/search';

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiKey,
        ])->get($url, [
            'term' => $this->search_term,
            'location' => $this->location,
            'limit' => $this->limit,
        ]);
        $expirationTime = Carbon::now()->addMinutes(5);

        if (isset($response->json()['error'])) {
            $this->result = [];
            session()->flash('error', $response->json()['error']['code'] . ': Check Yelp API key');
            return;
        } else {
            session()->put('yelp_result', $response->json()['businesses']);
            session()->put('yelp_result_expires_at', $expirationTime);
            return  $this->result = session()->get('yelp_result');
        }
    }
    public function saveDataToDatabase()
    {

        $existingPlatformsCount = Platform::all()->count();
        if ($existingPlatformsCount >= $this->platformCount) {
            throw new NotFoundHttpException('Maximum Platform limit reached for this resource.');
        }

        $platform = Platform::create([
            'name' => 'yelp',
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
                'nps_comment_ans' => null,
                'star_question_ans' => round($data['rating']),
                'review_platform_ans' => null,
                'video' => Cache::get('cloudinary_video_url') ?? null,
                'contact_info_ans' => [
                    'email' => null,
                    'location' => $data['location']['address1'] . " " . $data['location']['city'],
                    'organisation' => null,
                    'image' => $data['image_url'] ?? null,
                ],

                'private_feed_back_ans' => [
                    'name' =>  $data['name'],
                    'email' => null,
                    'phonenumber' =>  $data['display_phone'],
                    'message' => null,
                ],
            ];

            $existingReviewsCount = Review::all()->count();
            if ($existingReviewsCount >= 100) {
                throw new NotFoundHttpException('Maximum review limit reached for this resource.');
            }

            $feedback = Review::create($data);

            if (session()->has('yelp_result')) {
                session()->forget('yelp_result');
            }

            session()->flash('success', 'imported successfully');
            // return redirect()->to('review');
            $this->dispatch('refreshPage');
        }
    }
    public function saveAPIKey()
    {
        $this->validate([
            'yelp_api_key' => 'required',
        ]);

        $user = auth()->user();

        $user->sites()->first();
        $site = $user->sites()->first();

        $site->yelp_api_key = $this->yelp_api_key;
        $site->update();

        session()->flash('success', 'Updated successfully');

        $this->dispatch('refreshPage');
    }
    public function render()
    {
        return view('livewire.yelp-component');
    }
}
