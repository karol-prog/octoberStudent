<?php namespace AppLogger\Logger\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppLoggerRequest extends FormRequest {
	public function rules() {
		return [
			'first_name' => 'required|string|max:15',
			'number_of_attendence' => 'required|integer',
			'attendence_time' => 'required|date',
			'was_late' => 'required|boolean'
		];
	}
}


