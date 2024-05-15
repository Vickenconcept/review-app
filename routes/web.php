<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\LinkedInController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WidgetController;
use App\Http\Requests\CreateUserRequest;
use App\Livewire\ReviewComponent;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use shweshi\OpenGraph\OpenGraph;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

// use OpenGraph;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');

    // echo phpinfo();
});

// Route::get('home', function () {
//     return view('dashboard');
// });

Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('register', 'auth.register')->name('register');
    Route::view('register/success', 'auth.success')->name('register.success');
    Route::view('detail', 'auth.web-detail')->name('detail');


    Route::controller(AuthController::class)->prefix('auth')->name('auth.')->group(function () {
        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login');
    });
    Route::controller(PasswordResetController::class)->group(function () {
        Route::get('forgot-password', 'index')->name('password.request');
        Route::post('forgot-password', 'store')->name('password.email');
        Route::get('/reset-password/{token}', 'reset')->name('password.reset');
        Route::post('/reset-password', 'update')->name('password.update');
    });
});


Route::get('campaign/share/{uuid}', [CampaignController::class, 'share'])->name('campaign.share');
Route::get('campaign/component/{uuid}', [CampaignController::class, 'component'])->name('campaign.component');
Route::get('/record-video', [VideoController::class, 'showForm']);
Route::post('/upload-video', [VideoController::class, 'upload'])->name('upload');
Route::get('review/share', [ReviewController::class, 'share'])->name('review.share');
Route::get('review/share/{uuid}', [ReviewController::class, 'shareOne'])->name('review.shareOne');
Route::resource('review', ReviewController::class);



Route::middleware(['auth'])->group(function () {
    Route::get('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('home', [DashboardController::class, 'index'])->name('home');
    Route::get('campaign/widget/{uuid?}', [CampaignController::class, 'selectWidget'])->name('selectWidget');
    Route::post('campaign/update-name', [CampaignController::class, 'changeName'])->name('changeCampaignName');
    Route::resource('campaign', CampaignController::class);
    Route::resource('widget', WidgetController::class);
    Route::resource('reseller', ResellerController::class);
    Route::delete('/platforms/batch-delete',[PlatformController::class, 'batchDelete'])->name('platform.batchDelete');
    Route::resource('platform', PlatformController::class);
    Route::post('addToFolder', [FolderController::class, 'addToFolder'])->name('addToFolder');
    Route::resource('folder', FolderController::class);
    Route::view('profile', 'profile')->name('profile');
    Route::post('profile/name', [ProfileController::class, 'changeName'])->name('changeName');
    Route::post('profile/password', [ProfileController::class, 'changePassword'])->name('changePassword');

    Route::controller(SettingsController::class)->prefix('setting')->name('settings.')->group(function () {
        Route::get('/users', 'users')->name('users');
        Route::post('/users/create', 'createUser')->name('createUser');
        Route::delete('/users/delete/{id}', 'deleteUser')->name('deleteUser');
        Route::get('/', 'setting')->name('setting');
        Route::put('/setting/{id}', 'updateSetting')->name('updateSetting');
        Route::get('/theme', 'theme')->name('theme');
        Route::put('/setting/theme/{id}', 'updateTheme')->name('updateTheme');
        Route::get('/email', 'email')->name('email');
    });



});

Route::controller(FacebookController::class)->group(function () {
    Route::get('auth/facebook', 'redirectToFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'handleFacebookCallback');
});
Route::controller(LinkedInController::class)->group(function () {
    Route::get('auth/linkedin', 'redirectToLinkedIn')->name('auth.linkedin');
    Route::get('auth/linkedin/callback', 'handleLinkedInCallback');
});

Route::get('test', function () {


    // Auth::logout();

    // Artisan::call('optimize:clear');
    // Artisan::call('db:seed');


    // $apiKey = env('YELP_API');
    // $endpoint = 'https://api.tripadvisor.com/data/1.0/location/123456789/reviews';
    // $params = [
    //     'api_key' => $apiKey,
    //     // Add other required parameters as needed
    // ];

    // $response = Http::get($endpoint, $params);

    // if ($response->successful()) {
    //     $data = $response->json();
    // } else {
    //     $statusCode = $response->status();
    //     $errorMessage = $response->body();
    // }


    


//    $response = Http::get('https://serpapi.com/search.json?engine=google_play_product&store=apps&product_id=com.duolingo&all_reviews=true&platform=phone&sort_by=1&num=40&api_key=' . env('SERP_API_KEY'));
//     // $response = Http::get('https://serpapi.com/search.json?q=games&engine=google_play&api_key=' . env('SERP_API_KEY'));

//     return $response->json()['reviews'];



 $user = auth()->user();

 $site = $user->sites()->first();
 $site->facebook_token;
 $site->facebook_id;
 

 $response = Http::get('https://graph.facebook.com/v12.0/me/accounts', [
    'access_token' => $site->facebook_token, 
]);
//  $response = Http::get('https://graph.facebook.com/'.$site->facebook_id.'/accounts', [
//     'access_token' => $site->facebook_token, 
// ]);

$data = $response->json();

// var_dump($data);
 dd($data);

});
