<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LinkedInController extends Controller
{
    
    public function redirectToLinkedIn()
    {
        // return Socialite::driver('linkedin')->redirect();
        return Socialite::driver('linkedin')
        ->scopes(['r_emailaddress'])
        ->redirect();
    }


    public function handleLinkedinCallback()
{
    try {
        $user = Socialite::driver('linkedin')->user();

        // Extract the authorization code
        $authorizationCode = $user->code;

        // Use the authorization code or access token as needed
        // Your logic here...

    } catch (\Exception $e) {
        // Handle any exceptions
        dd($e->getMessage());
    }
}
    // public function handleLinkedInCallback()
    // {
    //     try {
    //         $user = Socialite::driver('linkedin')->user();
    
    //         // Use the user's details or access token as needed
    //         // Example:
    //         $accessToken = $user->token;
    
    //         // Your logic to handle the user's details or access token
    //     } catch (\Exception $e) {
    //         // Handle any exceptions, such as invalid request errors
    //         // Log or display the error message
    //         dd($e->getMessage());
    //     }
    // }


    // public function handleLinkedInCallback()
    // {

    //     // dd('here');
    //     $user = Socialite::driver('linkedin')->user();
    //     try {

    //         $user = Socialite::driver('linkedin')->user();

    //         $finduser = User::where('linkedin_id', $user->id)->first();

    //         if ($finduser) {

    //             Auth::login($finduser);

    //             return redirect()->intended('dashboard');
    //         } else {
    //             $newUser = User::updateOrCreate(['email' => $user->email], [
    //                 'name' => $user->name,
    //                 'linkedin_id' => $user->id,
    //                 'password' => encrypt('123456dummy')
    //             ]);

    //             Auth::login($newUser);

    //             return redirect()->intended('dashboard');
    //         }
    //     } catch (Exception $e) {
    //         dd($e->getMessage());
    //     }
    // }
}
