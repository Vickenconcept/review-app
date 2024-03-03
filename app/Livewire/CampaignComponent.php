<?php

namespace App\Livewire;

use App\Mail\InviteMail;
use App\Models\Campaign;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CampaignComponent extends Component
{

    public $email, $username;

    public $campaign,
        $campaignType ,
        $name, 
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

    public function mount($campaign)
    {
        $this->campaign = $campaign;
        $this->name = $campaign->name;
        $this->campaignType = $campaign->campaignType;
        $this->no_negative = $campaign->no_negative ;
        $this->enable_text_review = $campaign->enable_text_review ;
        $this->enable_video_review = $campaign->enable_video_review ;
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
    public function invitUser()
    {
        $user = Auth::user();

        $site = $user->sites()->first();
        $url = route('campaign.share', ['uuid' => $this->campaign->uuid]);

        if ($site->email_number <= 15) {
            # code...
            Mail::to($this->email)->send(new InviteMail($url, $this->username));

            $this->username = '';
            $this->email = '';
            
            session()->flash('success', 'Invitation email sent successfully!');



            $emailNumber = $site->email_number + 1;

            $site->update(['email_number' => $emailNumber]);
        }

        $this->dispatch('email-sent');
    }

    public function testInvite()
    {
        $url = route('campaign.share', ['uuid' => $this->campaign->uuid]);
        Mail::to(auth()->user()->email)->send(new InviteMail($url, $this->username));

        session()->flash('success', 'Invitation email sent successfully!');

        $this->dispatch('email-sent');
    }

    public function CampaignData()
    {
        if ($this->campaignType == 'NPS') {
            $this->campaign->campaignType = 'NPS';
            $this->campaign->update();
        }elseif($this->campaignType == 'reviews') {
            $this->campaign->campaignType = 'reviews';
            $this->campaign->update();
        }
        // $this->campaign ;
        $this->campaign->name = $this->name ;
        $this->campaign->language = $this->language ;
        $this->campaign->net_promote = $this->net_promote ;
        $this->campaign->nps_comment = $this->nps_comment ;
        $this->campaign->nps_comment_desc = $this->nps_comment_desc;
        $this->campaign->star_question = $this->star_question ;
        $this->campaign->normal_review = $this->normal_review ;
        $this->campaign->normal_review_desc = $this->normal_review_desc ;
        $this->campaign->review_platform = $this->review_platform ;
        $this->campaign->contact_info = $this->contact_info ;
        $this->campaign->video_review = $this->video_review ;
        $this->campaign->video_review_desc = $this->video_review_desc;
        $this->campaign->review_thanks = $this->review_thanks ;
        $this->campaign->review_thanks_desc = $this->review_thanks_desc ;
        $this->campaign->private_feed_back = $this->private_feed_back ;
        $this->campaign->private_feed_back_desc = $this->private_feed_back_desc ;
        $this->campaign->private_feed_back_Thanks = $this->private_feed_back_Thanks ;
        $this->campaign->private_feed_back_Thanks_desc = $this->private_feed_back_Thanks_desc;
        $this->campaign->update();

        return redirect()->route('campaign.show', ['campaign' => $this->campaign->slug]);

    }
    public function toggleNegativeView()
    {
        if ($this->no_negative) {
            $this->campaign->no_negative = '1';
            $this->campaign->update();
        }else {
            $this->campaign->no_negative = '0';
            $this->campaign->update();
        }
    }
    public function toggleTextReview()
    {
        if ($this->enable_text_review) {
            $this->campaign->enable_text_review = '1';
            $this->campaign->update();
        }else {
            $this->campaign->enable_text_review = '0';
            $this->campaign->update();
        }
    }
    public function toggleVideoReview()
    {
        if ($this->enable_video_review) {
            $this->campaign->enable_video_review = '1';
            $this->campaign->update();
        }else {
            $this->campaign->enable_video_review = '0';
            $this->campaign->update();
        }
    }

    public function render()
    {
        return view('livewire.campaign-component');
    }
}
