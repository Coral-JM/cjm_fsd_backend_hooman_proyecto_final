<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
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

//AUTH CONTROLLER
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/profile/myprofile', [AuthController::class, 'profile'])->middleware('auth:sanctum');
Route::post('/profile/myprofile', [AuthController::class, 'updateUser'])->middleware('auth:sanctum');

//LOCALS CONTROLLER
Route::get('/locals', [LocalController::class, 'getAllLocals']);

//REVIEWS CONTROLLER
Route::get('/reviews', [ReviewController::class, 'getAllReviews']);
Route::get('/reviews', [ReviewController::class, 'getAllReviewsById'])->middleware('auth:sanctum');
Route::post('/review', [ReviewController::class, 'newReview'])->middleware('auth:sanctum');


//FAVORITES CONTROLLER
Route::post('/', [FavoriteController::class, 'addFavorite'])->middleware('auth:sanctum');
Route::get('/favorites', [FavoriteController::class, 'getFavorites'])->middleware('auth:sanctum');

//COMPANY CONTROLLER
Route::get('/petitions', [CompanyController::class, 'getCompany'])->middleware(['auth:sanctum', 'isAdmin']);
Route::post('/petitions', [CompanyController::class, 'newCompany'])->middleware('auth:sanctum');



