<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Mail\WelcomeMail;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register(CreateUserRequest $request)
    {

        $requestData = $request->validated();
        $requestData['is_admin'] = 1;

        $user = User::create($requestData);
        $userId = $user->id;

        Mail::to($requestData['email'])->send(new WelcomeMail($requestData['password']));

        return view('auth.web-detail', compact('userId'));


    }

    public function login(CreateUserRequest $request)
    {
        if (!Auth::attempt($request->only(['email', 'password']))) {
            return $request->wantsJson()
                ? Response::api('Invalid Credentials', Response::HTTP_BAD_REQUEST)
                : back()->with('invalidCredential', 'Invalid Credentials');
        }

        return redirect()->to(route('home'));
    }



    public function logout(Request $request)
    {

        // if ($request->wantsJson()) {
        //     user()->tokens()->delete();
        //     return Response::api('logged out successfully');
        // }

        Auth::logout();

        return to_route('login');
    }
}
