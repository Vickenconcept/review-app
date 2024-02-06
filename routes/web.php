<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\VideoController;
use App\Http\Requests\CreateUserRequest;
use App\Livewire\ReviewComponent;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
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
});

Route::get('campaign/share/{uuid}', [CampaignController::class, 'share'])->name('campaign.share');
Route::get('/record-video', [VideoController::class, 'showForm']);
Route::post('/upload-video', [VideoController::class, 'upload'])->name('upload');

Route::middleware(['auth'])->group(function () {
    Route::post('auth/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::get('home', [DashboardController::class, 'index'])->name('home');
    Route::resource('campaign', CampaignController::class);
    Route::resource('review', ReviewController::class);

    Route::controller(SettingsController::class)->prefix('setting')->name('settings.')->group( function (){
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

Route::get('test', function () {
   

    Auth::logout();
 
});
