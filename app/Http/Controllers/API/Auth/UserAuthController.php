<?php

namespace App\Http\Controllers\api\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Classes\ApiResponseClass;
use App\Http\Controllers\Controller;
//use Illuminate\Container\Attributes\Auth;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    /**
     * Create a new class instance.
     */
    public function __construct(private UserRepository $UserRepository)
    {
        //
    }

    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'whatsapp_number'=>['required','string','max:16','regex:/^[0-9]+$/'],
                'contact_number'=>['required','string','max:16','regex:/^[0-9]+$/']
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation errors occurred.',
                'errors' => $e->errors(),
            ], 422);
        }
        
        $userData=$this->UserRepository->store($request->all());
        return ApiResponseClass::sendResponse($userData,'User created successfully');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);
        $login = $request['login'];
        $password = $request['password'];

        $user = User::where('email', $login)->orWhere('username', $login)->first();
        if ($user && Hash::check($password, $user->password)){
            Auth::login($user);
            $token = $user->createToken($user->username . '-AuthToken')->plainTextToken;
            $result= $result=['token' => $token, 'user' => $user];
            return ApiResponseClass::sendResponse($result, 'User logged in successfully');
        }
         return ApiResponseClass::sendError('Unauthorized', ['error' => 'Invalid credentials'], 401);
        
    }

    public function redirectToGoogle()
    {
        //
    }

    public function handleGoogleCallback(Request $request)
    {
        //

    }
    public function logout(Request $request)
    {
       $request->user()->token()->revoke();

    }
}
