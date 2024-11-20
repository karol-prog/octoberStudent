<?php namespace AppLogger\Logger\Http\Controllers;

use AppLogger\Logger\Models\Log;
use Illuminate\Routing\Controller;

use AppLogger\Logger\Http\Requests\AppLoggerRequest;

class AppLoggerController extends Controller {
	public function getStudents() {
		$allAttendence = Log::all();

		return response()->json([
			'data' => $allAttendence,
			'message' => 'All students attendance fetched successfully'
		]);
	}

	public function getStudent($id) {
		$attendence = Log::find($id);

		return response()->json([
			'data' => $attendence,
			'message' => 'Student attendance fetched successfully'
		]);
	}

	public function createStudent(AppLoggerRequest $request) {

		$data = $request->validated();

		$newAttendence = new Log();
		$newAttendence->fill($data);
		$newAttendence->save();

		return response()->json([
			'message' => 'Student attendance created successfully'
		]);
	}

	// public function updateStudent(AppLoggerRequest $request) {
	// 	$data = $request->validated();

	// 	$attendence = Log::find($data['id']);



	// 	return response()->json([
	// 		'message' => 'Student attendance updated successfully'
	// 	]);
	// }
}