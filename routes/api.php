<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/career', [ApiController::class, 'career']);
Route::get('/event', [ApiController::class, 'event']);
Route::get('/event/{id}', [ApiController::class, 'event_detail']);

Route::get('/event_carousel', [ApiController::class, 'event_carousel']);
Route::get('/event_image', [ApiController::class, 'event_image']);
Route::get('/inbox', [ApiController::class, 'inbox']);
Route::get('/news', [ApiController::class, 'news']);
Route::get('/news_carousel', [ApiController::class, 'news_carousel']);
Route::get('/next_event', [ApiController::class, 'next_event']);
Route::get('/partner', [ApiController::class, 'partner']);
Route::get('/team', [ApiController::class, 'team']);
Route::get('/testimoni', [ApiController::class, 'testimoni']);
Route::get('/youtube', [ApiController::class, 'youtube']);
