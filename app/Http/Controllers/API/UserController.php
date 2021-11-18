<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
Use App\Helpers\ResponseFormatter;
use Exception;
// use Illuminate\Validation\Rules\Password;
use Laravel\Fortify\Rules\Password;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        try {
            //code...
            $request -> validate([
                'name' => ['required','string','max:255'], 
                'email' => ['required','email','string','max:255','unique:users'],
                'phone_num' => ['required','string','max:255'],
                'password' => ['required','string', 'min:6'],
            ]);

            User::create([
                'name' =>$request->name,
                'email' =>$request->email,
                'phone_num' =>$request->phone_num,
                'password' => Hash::make($request->password),
            ]);

            $user = User::where('email', $request->email)->first();

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'User Registered'
        );
        } catch (Exception $error){
            return ResponseFormatter::error([
                'message' => 'Mungkin Error',
                'error' => $error,
            ], 'Authentication Failed' , 500);
        }
    }
}
