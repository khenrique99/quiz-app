<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
  public function create(Request $request): JsonResponse
  {
    try {
			$validator = Validator::make($request->all(), [
				'name' => 'required|string|between:2,100',
				'email' => 'required|string|email|max:100|unique:users',
				'date_birth' => 'required',
				'password' => 'required|string|min:6',
			]);

        if ($validator->fails()) {
          return response()->json(['errors' => $validator->errors()], JsonResponse::HTTP_BAD_REQUEST);
        }

        $user = User::create(
          array_merge(
            $validator->validated(),
            [
              'password' => bcrypt($request->password)
            ]
          )
        );

        return response()->json(['Success' => 'Create User'], JsonResponse::HTTP_CREATED);

		} catch (\Exception $e) {
			return response()->json(['errors' => [$e->getMessage()]], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
		}
  }

  public function update($id)
  {

  }

  public function delete($id)
  {

  }

  public function get($id)
  {

  }

  public function show()
  {
		$userTree = (new User)->userTre();

		return UserResource::collection($userTree);
  }
}
