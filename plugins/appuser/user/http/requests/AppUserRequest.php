<?php namespace AppUser\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AppUserRequest extends FormRequest
{
	public function rules()
	{
		return [
			'name' => 'required|string',
			'email' => 'required|string|email|unique:users',
			'password' => 'required|string|min:8'
		];
	}
}