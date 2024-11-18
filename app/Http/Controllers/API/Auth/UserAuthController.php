<?php

namespace App\Http\Controllers\api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Classes\ApiResponseClass;
use App\Repositories\UserRepository;
//use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
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
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'whatsapp_number'=>['required','string','max:16','regex:/^[0-9]+$/'],
            'contact_number'=>['required','string','max:16','regex:/^[0-9]+$/']
        ]);
        $userData=$this->UserRepository->store($request->all());
        return ApiResponseClass::sendResponse($userData,'User created successfully');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return response()->json([
                'message'=>'User logged in successfully',
            ],200);
        }else{
            return response()->json([
                'message'=>'incorrect email or password',
            ],401);
        }
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
       //
    }
}
