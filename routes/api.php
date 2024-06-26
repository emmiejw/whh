<?php

use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\StaffController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

    Route::middleware('api')->group(function () {
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('updates', UpdateController::class)->only('index');
        Route::resource('staff-members', StaffController::class);
    });
