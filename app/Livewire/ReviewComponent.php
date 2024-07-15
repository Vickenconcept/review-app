<?php

namespace App\Livewire;

use App\Models\Review;
use Livewire\Component;
use Livewire\WithFileUploads;
use Cloudinary\Uploader;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;
use Livewire\Attributes\On;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ReviewComponent extends Component
{

    use WithFileUploads;


    public $campaign,
        $campaignType,
        $campaign_name,
        $no_negative,
        $enable_text_review,
        $enable_video_review,
        $language,
        $net_promote,
        $nps_comment,
        $nps_comment_desc,
        $star_question,
        $normal_review,
        $normal_review_desc,
        $review_platform,
        $contact_info,
        $video_review,
        $video_review_desc,
        $review_thanks,
        $review_thanks_desc,
        $private_feed_back,
        $private_feed_back_desc,
        $private_feed_back_Thanks,
        $private_feed_back_Thanks_desc;
    // ---------------------------

    public
        $name,
        $phonenumber,
        $email,
        $location,
        $organisation,
        $message,
        $image,
        $name_h,
        $email_h,
        $phonenumber_h,
        $message_h,
        // -----
        $net_promote_ans,
        $nps_comment_ans,
        $star_question_ans,
        $review_platform_ans,
        $video,
        $contact_info_ans,
        $video_review_ans,
        $video_review_desc_ans,
        $private_feed_back_ans,
        $next = 1;



    public function mount($campaign)
    {
        $this->campaign = $campaign;
        $this->campaign_name = $campaign->name;
        $this->campaignType = $campaign->campaignType;
        $this->no_negative = $campaign->no_negative;
        $this->enable_text_review = $campaign->enable_text_review;
        $this->enable_video_review = $campaign->enable_video_review;
        $this->language = $campaign->language;
        $this->net_promote = $campaign->net_promote;
        $this->nps_comment = $campaign->nps_comment;
        $this->nps_comment_desc = $campaign->nps_comment_desc;
        $this->star_question = $campaign->star_question;
        $this->normal_review = $campaign->normal_review;
        $this->normal_review_desc = $campaign->normal_review_desc;
        $this->review_platform = $campaign->review_platform;
        $this->contact_info = $campaign->contact_info;
        $this->video_review = $campaign->video_review;
        $this->video_review_desc = $campaign->video_review_desc;
        $this->review_thanks = $campaign->review_thanks;
        $this->review_thanks_desc = $campaign->review_thanks_desc;
        $this->private_feed_back = $campaign->private_feed_back;
        $this->private_feed_back_desc = $campaign->private_feed_back_desc;
        $this->private_feed_back_Thanks = $campaign->private_feed_back_Thanks;
        $this->private_feed_back_Thanks_desc = $campaign->private_feed_back_Thanks_desc;
    }

    public function selectStar($starNum)
    {
        $this->star_question_ans = $starNum;
        $this->next = 2;
    }
    public function selectNPSScore($NPSScore)
    {
        $this->net_promote_ans = $NPSScore;
        $this->next = 3;
    }
    public function nextReview($next)
    {
        $this->next = $next;
    }
   

    public function saveData()
    {

        $this->next = 8;

        // $this->name;
        // $this->phonenumber;
        // $this->email;
        // $this->location;
        // $this->organisation;
        // $this->image;
        // // -----
        // $this->net_promote_ans;
        // $this->nps_comment_ans;
        // $this->star_question_ans;
        // $this->review_platform_ans;
        // $this->video;
        // $this->contact_info_ans;
        // $this->video_review_ans;
        // $this->video_review_desc_ans;
        // $this->private_feed_back_ans;
        // dd($this->email);

        $imageUrl = '';
        if ($this->image) {
            # code...
            $cloudinary = new Cloudinary();
            $cloudinaryResponse = $cloudinary->uploadApi()->upload($this->image->getRealPath());

            $imageUrl = $cloudinaryResponse['secure_url'];
        }
        // sleep(3);

        $data = [
            'site_id' => $this->campaign->site_id,
            'campaign_id' => $this->campaign->id,
            'uuid' => Str::uuid()->toString(),
            'net_promote_ans' => $this->net_promote_ans,
            'nps_comment_ans' => $this->nps_comment_ans,
            'star_question_ans' => $this->star_question_ans,
            'review_platform_ans' => $this->review_platform_ans,
            'video' => Cache::get('cloudinary_video_url') ?? null,
            'contact_info_ans' => [
                'email' => $this->email,
                'location' => $this->location,
                'organisation' => $this->organisation,
                'image' => $imageUrl ?? null,
            ],
            
            // 'video_review_ans' => 'Some video review answer',
            // 'video_review_desc_ans' => 'Some video review description answer',
            'private_feed_back_ans' => [
                'name' => $this->name_h,
                'email' => $this->email_h,
                'phonenumber' => $this->phonenumber_h,
                'message' => $this->message_h,
            ],
        ];

        $existingReviewsCount = Review::all()->count();
        if ($existingReviewsCount >= 500) {
            throw new NotFoundHttpException('Maximum review limit reached for this resource.');
        }

        $feedback = Review::create($data);
    }


    // public function upload(Request $request)
    // {
    //     $request->validate([
    //         'video' => 'required|mimecampaignTypes:video/x-matroska,video/webm|max:10240',
    //     ]);

    //     $video = $request->file('video');

    //     // Inspect the content and details of the uploaded file
    //     info('Uploaded video details:', [
    //         'Original Name' => $video->getClientOriginalName(),
    //         'MIME campaignType' => $video->getMimecampaignType(),
    //         'Size' => $video->getSize(),
    //         // Add any other relevant information you want to log
    //     ]);
    //     $filename = 'recorded-video.webm';



    //     // Store the video file
    //     // $video->storeAs('uploads', $filename, 'public');

    //     $cloudinary = new Cloudinary();
    //     $cloudinaryResponse = $cloudinary->uploadApi()->upload($video->getRealPath(), [
    //         'resource_campaignType' => 'video',
    //     ]);
    //     // Obtain the Cloudinary URL
    //     $this->video = $cloudinaryResponse['secure_url'];

    //     // Save the Cloudinary URL to the database or perform other actions
    //     // Example: Video::create(['cloudinary_url' => $cloudinaryUrl]);

    //     // Return the Cloudinary URL in the JSON response

    //     return response()->json(['success' => true, 'videoUrl' => $this->video]);
    // }

    // #[On('videoUploaded')]
    // public function videoUploaded($data)
    // {
    //     // Handle the event and update Livewire properties
    //     $this->video = $data['videoUrl'];
    // }

    public function render()
    {
        return view('livewire.review-component');
    }
}
