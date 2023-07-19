<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\LocalController;
use App\Http\Controllers\ReviewController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//AUTH CONTROLLERS
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth:sanctum');

//LOCALS CONTROLLERS
Route::get('/locals', [LocalController::class, 'getAllLocals']);

//REVIEWS CONTROLLERS
Route::get('/reviews', [ReviewController::class, 'getAllReviews']);
Route::get('/reviews', [ReviewController::class, 'getAllReviewsById'])->middleware('auth:sanctum');;

//FAVORITES CONTROLLERS
Route::post('/favorites', [FavoriteController::class, 'addFavorite'])->middleware('auth:sanctum');