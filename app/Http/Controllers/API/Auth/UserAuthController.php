<?php

namespace App\Http\Controllers\api\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\UserRepository;
//use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
class UserAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'username' => 'required|unique:users',
            'whatsapp_number'=>'required|unique:users|integer',
            'contact_number'=>'required|unique:users|integer',
        ]);
        $user=new User([
            'name'=>$request->name,
            'email'=>$request->email,
            'username'=>$request->username,
            'contact_number'=>$request->contact_number,
            'whatsapp_number'=>$request->whatsapp_number,
            'password'=>bcrypt($request->password)
        ]);
        $user->save();
        return response()->json([
            'message'=>'User created successfully',
        ],200);

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
