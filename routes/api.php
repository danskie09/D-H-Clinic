<?php

use App\Http\Controllers\Api\V1\RegistrationController;
use App\Http\Controllers\Api\V1\LoginController;
use App\Http\Controllers\Api\V1\LogoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::post('/registration',[RegistrationController::class,'store']);
Route::post('/login',[LoginController::class,'store']);
Route::post('/logout',[LogoutController::class,'logout'])->middleware('auth:sanctum');