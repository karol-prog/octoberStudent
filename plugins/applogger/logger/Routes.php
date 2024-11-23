<?php

use Illuminate\Support\Facades\Route;

//CONTROLLERS
use Applogger\Logger\Http\Controllers\AppLoggerController;

Route::prefix('api/v1')->group(function () {

	Route::get('/getallattendence', [AppLoggerController::class, 'getStudents']);

	Route::get('/getattendence/{id}', [AppLoggerController::class, 'getStudent']);

	Route::post('/createattendence', [AppLoggerController::class, 'createStudent']);

	Route::put('/updateattendence/{id}', [AppLoggerController::class, 'updateStudent']);
});