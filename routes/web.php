<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\EventCarouselController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\YoutubeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/event', [FrontendController::class, 'event'])->name('event');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/news/{slug}', [FrontendController::class, 'news_detail'])->name('news_detail');
Route::get('/career', [FrontendController::class, 'career'])->name('career');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
    // Route::get('/registration', [AuthenticationController::class, 'registration'])->name('registration');
    Route::post('/login_submit', [AuthenticationController::class, 'login_submit'])->name('login_submit');
});
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');
// Route::post('/registration_submit', [AuthenticationController::class, 'registration_submit'])->name('registration_submit');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [BackendController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/partner', [BackendController::class, 'partner'])->name('dashboard_partner');
    Route::get('/dashboard/event', [BackendController::class, 'event'])->name('dashboard_event');
    Route::get('/dashboard/news', [BackendController::class, 'news'])->name('dashboard_news');
    Route::get('/dashboard/career', [BackendController::class, 'career'])->name('dashboard_career');
    Route::get('/dashboard/team', [BackendController::class, 'team'])->name('dashboard_team');
    Route::get('/dashboard/inbox', [BackendController::class, 'inbox'])->name('dashboard_inbox');

    // store
    Route::post('/dashboard/event/store', [EventController::class, 'store'])->name('dashboard_event_store');
    Route::post('/dashboard/partner/store', [PartnerController::class, 'store'])->name('dashboard_partner_store');
    Route::post('/dashboard/event_carousel/store', [EventCarouselController::class, 'store'])->name('dashboard_event_store');
    Route::post('/dashboard/youtube/store', [YoutubeController::class, 'store'])->name('dashboard_youtube_store');
    Route::post('/dashboard/testimoni/store', [TestimoniController::class, 'store'])->name('dashboard_testimoni_store');
    Route::post('/dashboard/news/store', [NewsController::class, 'store'])->name('dashboard_news_store');
    Route::post('/dashboard/team/store', [TeamController::class, 'store'])->name('dashboard_team_store');

    // update view
    Route::get('/dashboard/event/update/{id}', [BackendController::class, 'update_event'])->name('dashboard_event_update_view');
    Route::get('/dashboard/partner/update/{id}', [BackendController::class, 'update_partner'])->name('dashboard_partner_update_view');
    Route::get('/dashboard/partner/urutan', [BackendController::class, 'update_partner_urutan'])->name('dashboard_partner');
    Route::get('/dashboard/event_carousel/update/{id}', [BackendController::class, 'update_event_carousel'])->name('dashboard_event_update_view');
    Route::get('/dashboard/youtube/update/{id}', [BackendController::class, 'update_youtube'])->name('dashboard_youtube_update_view');
    Route::get('/dashboard/testimoni/update/{id}', [BackendController::class, 'update_testimoni'])->name('dashboard_testimoni_update_view');
    Route::get('/dashboard/news/update/{id}', [BackendController::class, 'update_news'])->name('dashboard_news_update_view');
    Route::get('/dashboard/team/update/{id}', [BackendController::class, 'update_team'])->name('dashboard_team_update_view');

    // update
    Route::post('/dashboard/event/update', [EventController::class, 'update'])->name('dashboard_event_update');
    Route::post('/dashboard/partner/update', [PartnerController::class, 'update'])->name('dashboard_partner_update');
    Route::post('/dashboard/partner/update_urutan', [PartnerController::class, 'updateUrutan'])->name('dashboard_partner_update_urutan');
    Route::post('/dashboard/event_carousel/update', [EventCarouselController::class, 'update'])->name('dashboard_event_update');
    Route::post('/dashboard/youtube/update', [YoutubeController::class, 'update'])->name('dashboard_youtube_update');
    Route::post('/dashboard/testimoni/update', [TestimoniController::class, 'update'])->name('dashboard_testimoni_update');
    Route::post('/dashboard/news/update', [NewsController::class, 'update'])->name('dashboard_news_update');
    Route::post('/dashboard/team/update', [TeamController::class, 'update'])->name('dashboard_team_update');

    // delete
    Route::get('/dashboard/event/delete/{id}', [EventController::class, 'destroy'])->name('dashboard_event_delete');
    Route::get('/dashboard/partner/delete/{id}', [PartnerController::class, 'destroy'])->name('dashboard_partner_delete');
    Route::get('/dashboard/event_carousel/delete/{id}', [EventCarouselController::class, 'destroy'])->name('dashboard_event_carousel_delete');
    Route::get('/dashboard/youtube/delete/{id}', [YoutubeController::class, 'destroy'])->name('dashboard_youtube_delete');
    Route::get('/dashboard/testimoni/delete/{id}', [TestimoniController::class, 'destroy'])->name('dashboard_testimoni_delete');
    Route::get('/dashboard/news/delete/{id}', [NewsController::class, 'destroy'])->name('dashboard_news_delete');
    Route::get('/dashboard/team/delete/{id}', [TeamController::class, 'destroy'])->name('dashboard_team_delete');
});
