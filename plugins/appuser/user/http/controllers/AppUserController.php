<?php namespace AppUser\User\Http\Controllers;

use AppUser\User\Models\User;

use Illuminate\Routing\Controller;

use AppUser\User\Http\Requests\AppUserRequest;
use Illuminate\Http\Request;

class AppUserController extends Controller
{
	public function register(Request $request)
	{
		logger('REQUEST', [$request->user()->createToken($request->token_name)]);
		$data = $request->validated();
		$token = $request->user()->createToken($request->token_name);

		// logger($token);

		if(!$data) return response()->json([
			'message' => 'Invalid data'
		], 400);

		$newUser = new User();
		$newUser->fill($data);
		$newUser->save();

		return response()->json([
			'message' => 'Successfully created user!',
			'token' => $token->plainTextToken,
			'user' => $newUser
		], 200);
	}
}