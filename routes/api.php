<?php

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



Route::apiResource('/applications', App\Http\Controllers\Api\ApplicationController::class);
Route::apiResource('/users', App\Http\Controllers\Api\UserController::class);
Route::apiResource('/reviews', App\Http\Controllers\Api\ReviewsController::class);
Route::apiResource('/virtual_machines', App\Http\Controllers\Api\VirtualMachineController::class);

Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
Route::post('/refresh', App\Http\Controllers\Api\LogoutController::class)->name('refresh');
