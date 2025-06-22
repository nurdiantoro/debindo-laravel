<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\EventCarouselController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NextEventController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\PerubahanDatabase;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\YoutubeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

// Route::get('/mengganti_url_logo', [PerubahanDatabase::class, 'mengganti_url_logo']);
// Route::get('/mengganti_url_team', [PerubahanDatabase::class, 'mengganti_url_team']);
// Route::get('/mengganti_url_news', [PerubahanDatabase::class, 'mengganti_url_news']);
// Route::get('/mengganti_url_newscarousel', [PerubahanDatabase::class, 'mengganti_url_newscarousel']);
// Route::get('/mengganti_url_eventcarousel', [PerubahanDatabase::class, 'mengganti_url_eventcarousel']);
// Route::get('/mengganti_url_partner', [PerubahanDatabase::class, 'mengganti_url_partner']);
// Route::get('/mengganti_url_testimoni', [PerubahanDatabase::class, 'mengganti_url_testimoni']);
// Route::get('/mengganti_url_youtube', [PerubahanDatabase::class, 'mengganti_url_youtube']);

// Route::get('/artisan', function () {
//     Artisan::call('config:clear');
//     Artisan::call('optimize');
//     return 'Configuration cache cleared!';
// });

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/event', [FrontendController::class, 'event'])->name('event');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/news/{slug}', [FrontendController::class, 'news_detail'])->name('news_detail');
Route::get('/career', [FrontendController::class, 'career'])->name('career');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/guide', [FrontendController::class, 'guide'])->name('guide');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::put('/contact/store', [FrontendController::class, 'contact_store'])->name('contact_store');
Route::get('/instagram', [FrontendController::class, 'instagram'])->name('instagram');


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
    // Route::get('/registration', [AuthenticationController::class, 'registration'])->name('registration');
    Route::post('/login_submit', [AuthenticationController::class, 'login_submit'])->name('login_submit');
});
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
// Route::post('/registration_submit', [AuthenticationController::class, 'registration_submit'])->name('registration_submit');
