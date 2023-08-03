<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index']);
Route::get('/events', [FrontendController::class, 'events']);
Route::get('/news', [FrontendController::class, 'news']);
Route::get('/career', [FrontendController::class, 'career']);
Route::get('/team', [FrontendController::class, 'team']);
Route::get('/about', [FrontendController::class, 'about']);
Route::get('/contact', [FrontendController::class, 'contact']);
