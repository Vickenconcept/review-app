<?php

namespace App\Livewire;

use App\Models\Campaign;
use App\Models\Platform;
use App\Models\Review;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TrustPilotComponent extends Component
{
    use WithPagination;

    public $search_key,
        // $offset,
        $result = [],
        $platformCount = 7,
        $platforms,
        $trust_pilot_used;


    public $site;



    public function mount()
    {
        $user = auth()->user();
        $this->site = $user->sites()->first();


        if (session()->has('trust_pilot_result')) {
            if (session()->has('trust_pilot_result_expires_at') && Carbon::now()->gt(session()->get('trust_pilot_result_expires_at'))) {
                session()->forget('trust_pilot_result');
                session()->forget('trust_pilot_result_expires_at');
                $this->result = [];
            } else {
                $this->result = session()->get('trust_pilot_result');
            }
        }

        $this->platforms = Platform::all();

        $activities = $this->site->user_activities->first();

        $this->trust_pilot_used =   $activities->trust_pilot_used;
    }


    public function searchData()
    {
        $this->validate([
            'search_key' => 'required|string',
        ]);

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            ])->get('https://wextractor.com/api/v1/reviews/trustpilot', [
                'id' => trim($this->search_key),
                'auth_token' =>  env('WEX_TRACTOR_API_KEY'), 
                
            ]);
            
            $expirationTime = Carbon::now()->addMinutes(5);
            
            if (isset($response->json()['detail'])) {
                $this->result = [];
                session()->flash('error', $response->json()['detail'] . ': Check trust_pilot API key');
                return;
            } else {
            session()->put('trust_pilot_result', $response->json()['reviews']);
            session()->put('trust_pilot_result_expires_at', $expirationTime);
            return  $this->result = session()->get('trust_pilot_result');
        }
    }
    public function saveDataToDatabase()
    {
        $user = auth()->user();
        $site = $user->sites()->first();


        $platform = $user->platforms()->create([
            'site_id' => $site->id,
            'name' => 'trust_pilot',
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
                'review_platform_ans' => $data['text'],
                'video' => Cache::get('cloudinary_video_url') ?? null,
                'contact_info_ans' => [
                    'email' => null,
                    'location' => null,
                    'organisation' => null,
                    'image' => $data['reviewer_avatar'] ?? null,
                ],

                'private_feed_back_ans' => [
                    'name' =>  $data['reviewer'],
                    'email' => null,
                    'phonenumber' =>  null,
                    'message' => null,
                ],
                'date' => $data['datetime']
            ];

            $existingReviewsCount = Review::all()->count();
            if ($existingReviewsCount >= 500) {
                throw new NotFoundHttpException('Maximum review limit reached for this resource.');
            }

            $feedback = Review::create($data);

            if (session()->has('trust_pilot_result')) {
                session()->forget('trust_pilot_result');
            }

            session()->flash('success', 'imported successfully');
            // return redirect()->to('review');
            $this->dispatch('refreshPage');
        }
    }

    public function render()
    {
        return view('livewire.trust-pilot-component');
    }
}
