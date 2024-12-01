<?php

use Illuminate\Support\Facades\Route;

//CONTROLLER
use AppUser\User\Http\Controllers\AppUserController;

Route::prefix('api/v1')->group(function () {
	Route::post('/register', [AppUserController::class, 'register']);
	// Route::post('/login', 'AppAuth\Http\Controllers\AuthController@login');
	// Route::post('/logout', 'AppAuth\Http\Controllers\AuthController@logout');
	// Route::post('/refresh', 'AppAuth\Http\Controllers\AuthController@refresh');
	// Route::post('/me', 'AppAuth\Http\Controllers\AuthController@me');
});