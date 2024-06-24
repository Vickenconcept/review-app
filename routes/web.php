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
use App\Http\Controllers\TripAdvisorScrapeController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\WidgetController;
use App\Http\Requests\CreateUserRequest;
use App\Livewire\ReviewComponent;
use Illuminate\Http\Request;
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
    return redirect()->to('login');
    // echo phpinfo();
});



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
Route::get('trip', [TripAdvisorScrapeController::class, 'scrapeReviews'])->name('trip');

Route::get('test', 
// function (Request $request)
//  {

//     $apifyApiToken = env('APIFY_API_TOKEN');  
//     // Prepare the input data for the Apify actor
//     $inputData = [
//         'startUrls' => [
//             [
//                 'url' => 'https://www.tripadvisor.com/Hotel_Review-g60763-d208453-Reviews-Hilton_New_York_Times_Square-New_York_City_New_York.html'
//             ]
//         ],
//         'maxItemsPerQuery' => 5,
//         'scrapeReviewerInfo' => true,
//         'lastReviewDate' => '',
//         'reviewRatings' => [
//             'ALL_REVIEW_RATINGS'
//         ],
//         'reviewsLanguages' => [
//             'ALL_REVIEW_LANGUAGES'
//         ]
//     ];

//     // Start the Apify actor
//     $response = Http::withHeaders([
//         'Content-Type' => 'application/json',
//     ])->post("https://api.apify.com/v2/acts/Hvp4YfFGyLM635Q2F/runs?token=$apifyApiToken", $inputData);
    
//     if ($response->failed()) {
//         return response()->json(['error' => 'Failed to start the Apify actor'], 500);
//     }
    
//     $runId = $response->json()['data']['id'];
    
//     // Poll the actor run status until it finishes
//     $status = 'RUNNING';
//     while ($status === 'RUNNING' || $status === 'READY') {
//         sleep(5);  // Wait for a few seconds before checking the status again
        
//         $statusResponse = Http::withHeaders([
//             'Authorization' => "Bearer $apifyApiToken",
//             ])->get("https://api.apify.com/v2/actor-runs/$runId");
            
//             if ($statusResponse->failed()) {
//                 return response()->json(['error' => 'Failed to fetch the actor run status'], 500);
//             }
            
//             // return  $statusResponse->json();
//             $status = $statusResponse->json()['data']['status'];
//     }

//     if ($status !== 'SUCCEEDED') {
//         // Fetch the logs if the run did not succeed
//         $logsResponse = Http::withHeaders([
//             'Authorization' => "Bearer $apifyApiToken",
//         ])->get("https://api.apify.com/v2/actor-runs/$runId/logs");

//         if ($logsResponse->failed()) {
//             return response()->json(['error' => 'Failed to fetch the run logs'], 500);
//         }

//         return response()->json([
//             'error' => 'Actor run did not succeed',
//             'logs' => $logsResponse->json()
//         ], 500);
//     }

//     // Fetch the results
//     $resultsResponse = Http::withHeaders([
//         'Authorization' => "Bearer $apifyApiToken",
//     ])->get("https://api.apify.com/v2/actor-runs/$runId/dataset/items");

//     if ($resultsResponse->failed()) {
//         return response()->json(['error' => 'Failed to fetch the results'], 500);
//     }

//     return response()->json($resultsResponse->json());
// }

 function (Request $request)
{
    $apifyApiToken = env('APIFY_API_TOKEN');  

    $searchType = $request->input('search_type', 'keyword'); // e.g., 'url', 'keyword'
    $searchValue = $request->input('search_value', 'shoe'); 
    // $searchValue = $request->input('search_value', 'https://www.tripadvisor.com/Hotel_Review-g60763-d208453-Reviews-Hilton_New_York_Times_Square-New_York_City_New_York.html'); 
    if (empty($searchType) || empty($searchValue)) {
        return response()->json(['error' => 'Missing search type or search value'], 400);
    }

    $startUrls = [];

    if ($searchType === 'url') {
        if (!filter_var($searchValue, FILTER_VALIDATE_URL)) {
            return response()->json(['error' => 'Invalid URL'], 400);
        }
        $startUrls[] = ['url' => $searchValue];
    } elseif ($searchType === 'keyword') {
        $searchUrl = "https://www.tripadvisor.com/Search?q=" . urlencode($searchValue);
        $startUrls[] = ['url' => $searchUrl];
    } else {
        return response()->json(['error' => 'Unsupported search type'], 400);
    }

    $inputData = [
        'startUrls' => $startUrls,
        'maxItemsPerQuery' => 50,
        'scrapeReviewerInfo' => true,
        'lastReviewDate' => '',
        'reviewRatings' => [
            'ALL_REVIEW_RATINGS'
        ],
        'reviewsLanguages' => [
            'ALL_REVIEW_LANGUAGES'
        ],
        'customMapFunction' => '(object) => { return { ...object } }'
    ];
    
    $response = Http::withHeaders([
        'Content-Type' => 'application/json',
        ])->post("https://api.apify.com/v2/acts/Hvp4YfFGyLM635Q2F/runs?token=$apifyApiToken", $inputData);
        
        if ($response->failed()) {
            return response()->json(['error' => 'Failed to start the Apify actor'], 500);
        }
        
        $runId = $response->json()['data']['id'];
        
        $status = 'RUNNING';
        while ($status === 'RUNNING' || $status === 'READY') {
            sleep(5);  
            
            $statusResponse = Http::withHeaders([
                'Authorization' => "Bearer $apifyApiToken",
                ])->get("https://api.apify.com/v2/actor-runs/$runId");
                
                if ($statusResponse->failed()) {
                    return response()->json(['error' => 'Failed to fetch the actor run status'], 500);
                }
                
                $status = $statusResponse->json()['data']['status'];
            }
            
            if ($status !== 'SUCCEEDED') {
                $logsResponse = Http::withHeaders([
                    'Authorization' => "Bearer $apifyApiToken",
                ])->get("https://api.apify.com/v2/actor-runs/$runId/logs");
                
                if ($logsResponse->failed()) {
                    return response()->json(['error' => 'Failed to fetch the run logs'], 500);
                }
                
                return response()->json([
                    'error' => 'Actor run did not succeed',
                    'logs' => $logsResponse->json()
                ], 500);
            }
            
            $resultsResponse = Http::withHeaders([
                'Authorization' => "Bearer $apifyApiToken",
                ])->get("https://api.apify.com/v2/actor-runs/$runId/dataset/items");
                dd($resultsResponse->json());
                
    if ($resultsResponse->failed()) {
        return response()->json(['error' => 'Failed to fetch the results'], 500);
    }

    return response()->json($resultsResponse->json());
}
);
