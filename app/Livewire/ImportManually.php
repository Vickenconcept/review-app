<?php

namespace App\Livewire;

use App\Imports\ReviewImport;
use App\Jobs\ProcessExcelImport;
use App\Models\Campaign;
use App\Models\Platform;
use Carbon\Carbon;
use Illuminate\Support\Facades\Bus;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ImportManually extends Component
{
    use WithFileUploads;

    public $result = [];
    public $reviewFile;


    public function mount()
    {
        // if (session()->has('manual_result')) {
        //     if (session()->has('manual_result_expires_at') && Carbon::now()->gt(session()->get('manual_result_expires_at'))) {
        //         session()->forget('manual_result');
        //         session()->forget('manual_result_expires_at');
        //         $this->result = [];
        //     }
        // }

        $this->result = session()->get('manual_result');
    }

    public function saveDataToDatabase()
    {

        $this->validate([
            'reviewFile' => 'required|mimes:xls,xlsx',
        ]);

        $data = Excel::toArray(new ReviewImport, $this->reviewFile);


        // $expirationTime = Carbon::now()->addMinutes(3);
        foreach ($data as  $value) {
            session()->put('manual_result', $value);
        }
        // session()->put('manual_result_expires_at', $expirationTime);


        $this->result =  session()->get('manual_result');
        // dd($this->result);

        sleep(2);
        $user = auth()->user();
        $siteId = $user->sites->first()->id;
        $campaign =  Campaign::create([
            'uuid' => Str::uuid()->toString(),
            'site_id' => $siteId,
            'widget_id' => 1,
            'platform_id' => null,
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


        foreach ($this->result  as $key => $row) {
            if ($key > 0) {
                $campaign->reviews()->create([
                    'site_id' => $campaign->site_id,
                    'uuid' => Str::uuid()->toString(),
                    'net_promote_ans' =>  $row[5] ?? null,
                    'nps_comment_ans' =>  null,
                    'star_question_ans' => $row[4] ?? null,
                    'review_platform_ans' => $row[7] ?? null,
                    'video' =>  null,
                    'contact_info_ans' => [ 
                        'email' => $row[2] ,
                        'location' =>   $row[6] ?? null,
                        'organisation' => null,
                        'image' => $row[0] ?? null,
                    ],

                    'private_feed_back_ans' => [
                        'name' =>   $row[1] ?? null,
                        'email' => $row[2] ?? null,
                        'phonenumber' => $row[3] ?? null,
                        'message' => $row[7] ?? null,
                    ],
                ]);
            }
        }

        if (session()->has('yelp_rmanual_resultesult')) {
            session()->forget('manual_result');
        }

        return redirect()->to('review')->with('message', 'imported successfully');
    }

    public function doItNow()
    {

        // dd($this->result);
        $user = auth()->user();
        $siteId = $user->sites->first()->id;
        $campaign =  Campaign::create([
            'uuid' => Str::uuid()->toString(),
            'site_id' => $siteId,
            'widget_id' => 1,
            'platform_id' => null,
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






        foreach ($this->result  as $key => $row) {
            if ($key > 0) {
                $campaign->reviews()->create([
                    'site_id' => $campaign->site_id,
                    'uuid' => Str::uuid()->toString(),
                    'net_promote_ans' =>  null,
                    'nps_comment_ans' => null,
                    'star_question_ans' => $row[3],
                    'review_platform_ans' => $row[4] ?? null,
                    'video' =>  null,
                    'contact_info_ans' => [
                        'email' => null,
                        'location' =>   $row[5],
                        'organisation' => null,
                        'image' => $row[0] ?? null,
                    ],

                    'private_feed_back_ans' => [
                        'name' =>   $row[1],
                        'email' => null,
                        'phonenumber' =>   $row[2],
                        'message' => null,
                    ],
                ]);
            }
        }
    }


    public function render()
    {
        return view('livewire.import-manually');
    }
}
