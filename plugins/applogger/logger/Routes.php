<?php

use Illuminate\Support\Facades\Route;

use Applogger\Logger\Models\Logger;

Route::post('/createattendence', function() {
    $data = request()->validate([
        'firstName' => 'required|string',
        'numberOfAttendence' => 'required|integer',
        'attendenceTime' => 'required|date',
        'wasLate' => 'required|boolean'
    ]);

    $newAttendence = new Logger($data);
	$newAttendence->save();

    return response()->json([
        'message' => 'Attendance created successfully'
    ]);
});

Route::get('/getallattendence', function() {
	$allAttendence = Logger::all();

	return response()->json([
		'data' => $allAttendence
	]);
});

Route::get('/getattendence/{id}', function($id) {
	$attendence = Logger::find($id);

	return response()->json([
		'data' => $attendence
	]);
});