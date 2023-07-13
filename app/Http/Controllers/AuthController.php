<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use Laravel\Sanctum\PersonalAccessToken;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request) {
        try {
            $validator = Validator::make($request->all(), [
                'name' => 'required | string',
                'email' => 'required | email | unique:users,email', 
                'password' => ['required', Password::min(8)->mixedCase()->numbers()]
            ]);

            if ($validator->fails()){
                return response()->json($validator->errors(),400);
            }

            $validData = $validator->validated();

            $newUser = User::create([
                'name'=>$validData['name'],
                'email'=>$validData['email'],
                'password'=>bcrypt($validData['password']),
                'role_id'=> 2

            ]);

            $token = $newUser->createToken('apiToken')->plainTextToken;

            return response()->json([
                'message'=> 'User registered',
                'data' => $newUser,
                'token' => $token
            ], Response::HTTP_CREATED);
        } catch (\Throwable $th) {
            Log::error('Error registering user' . $th->getMessage());

            return response()->json([
                'message' => 'Error registering user'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
