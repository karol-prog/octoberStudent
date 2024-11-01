<?php

use Illuminate\Support\Facades\Route;

use Applogger\Logger\Models\Log;

Route::prefix('api/v1')->group(function () {
	Route::post('/createattendence', function() {
		$data = request()->validate([
			'first_name' => 'required|string',
			'number_of_attendence' => 'required|integer',
			'attendence_time' => 'required|date',
			'was_late' => 'required|boolean'
		]);

		$newAttendence = new Log();
		$newAttendence->fill($data);
		$newAttendence->save();

		return response()->json([
			'message' => 'Attendance created successfully'
		]);
	});

	Route::get('/getallattendence', function() {
		$allAttendence = Log::all();

		return response()->json([
			'data' => $allAttendence
		]);
	});

	Route::get('/getattendence/{id}', function($id) {
		$attendence = Log::find($id);

		return response()->json([
			'data' => $attendence
		]);
	});
});