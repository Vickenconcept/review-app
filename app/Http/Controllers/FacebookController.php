<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Platform;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;


class FacebookController extends Controller
{
    //
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')
            ->scopes(['email', 'public_profile', 'pages_show_list', 'pages_read_user_content'])
            ->redirect();
    }

    public function handleFacebookCallback()
    {

        dd(Socialite::driver('facebook')->user());
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = auth()->user();
            $site =  $finduser->sites()->first();

            if ($finduser) {
                $site->facebook_token =  $user->token;
                $site->facebook_id =  $user->id;
                $site->update();
                

                  // $response = Http::get('https://graph.facebook.com/v12.0/me/accounts', [
                //     'access_token' => $site->facebook_token, 
                // ]);
                
                // $data = $response->json();
                // $site->facebook_Page_access_token =  $response->json()['data'][0]['access_token'];
                // $site->update();
                dd($user);



                $platform = $finduser->platforms()->create([
                    'site_id' => $site->id,
                    'name' => 'facebook'
                ]);

                $campaign =  Campaign::create([
                    'uuid' => Str::uuid()->toString(),
                    'site_id' => $site->id,
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

                return redirect()->to('platform');
            }
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
