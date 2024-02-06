<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Mail\WelcomeMail;
use App\Models\Site;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Cloudinary\Cloudinary;

class SettingsController extends Controller
{
    public function users()
    {
        $user = auth()->user();
        $userCreatingNewUser = User::find($user->id);
        $site = $userCreatingNewUser->sites()->first();

        return view('setting.user', compact('site'));
    }


    public function createUser(Request $request)
    {
        $user = auth()->user();
        $userCreatingNewUser = User::find($user->id);
        $site = $userCreatingNewUser->sites()->first();


        $this->authorize('create', User::class);

        if ($site->users()->count() >= 3) {
            return back()->withErrors(['message' => 'A site cannot have more than three associated users.']);
        }

        $requestData = $request->validate([
            'name' => 'sometimes',
            'email' => 'required|email|unique:users,email',
            'password' => 'sometimes',
            'is_admin' => 'sometimes'
        ]);

        $password = Str::random(8);
        $requestData['name'] = 'User';
        $requestData['password'] = bcrypt($password);

        // Set 'is_admin' to 0 if not provided in the request
        $requestData['is_admin'] = $request->has('is_admin') ? 1 : 0;

        $newUser = User::create($requestData);
        $site->users()->save($newUser);

        Mail::to($requestData['email'])->send(new WelcomeMail($password));

        return back()->with('success', 'User Created Successfully');
    }

    public function deleteUser($userId)
    {

        $this->authorize('delete', User::class);
        $userToDelete = User::find($userId);

        if ($userToDelete) {
            // Remove site association
            $userToDelete->sites()->detach();


            // Delete the user
            $userToDelete->delete();

            return back()->with('success', 'User deleted successfully.');
        }

        return back()->withErrors(['message' => 'User not found.']);
    }
    public function email()
    {

        return view('setting.email');
    }
    public function theme()
    {

        $user = auth()->user();
        $foundUser = User::find($user->id);
        $site = $foundUser->sites()->first();
        return view('setting.theme', compact('site'));
    }

    public function UpdateTheme(Request $request, $id)
    {

        $user = auth()->user();
        $foundUser = User::find($user->id);
        $site = $foundUser->sites()->first();

        $requestData = $request->validate([
            'theme_color' => 'required',
            'theme_color_two' => 'sometimes',
            'review_type' => 'sometimes',
            'font' => 'sometimes',
            'logo' => 'sometimes|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        $imageUrl = $site->logo;
        if ($request->file('logo')) {
            # code...
            $cloudinary = new Cloudinary();
            $cloudinaryResponse = $cloudinary->uploadApi()->upload($request->file('logo')->getRealPath());

            $imageUrl = $cloudinaryResponse['secure_url'];
        }
        
        $requestData['logo'] =  $imageUrl;
        
        $site = Site::findorfail($id);
        $site->update($requestData);

        return back()->with('success','Updated Successfully');
    }
    public function setting()
    {

        $user = auth()->user();
        $foundUser = User::find($user->id);
        $site = $foundUser->sites()->first();
      
        return view('setting.setting', compact('site'));
    }
    public function UpdateSetting(Request $request, $id)
    {

        $this->authorize('create', User::class);

        $requestData = $request->validate([
            'name' => 'required',
            'description' => 'sometimes',
            'address' => 'sometimes',
            'url' => 'required|url',
            'privacy_url' => 'sometimes'
        ]);


        $site = Site::findorfail($id);
        $site->update($requestData);

        return back()->with('success','Updated Successfully');
    }
}
