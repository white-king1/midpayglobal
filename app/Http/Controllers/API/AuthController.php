<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\User;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=> ['required', 'string', 'min:11'],
            'usertype'=>['required'],
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone'=>$data['phone'],
            'usertype'=>$data['usertype'],
        ]);

        $user->save();

        $token = $user->createToken('API Token')->plainTextToken;

        return response ()->json([
            'success' => true,
            'data' => $user,
            'token' => $token,

        ]);


    }
    public function login(Request $request)
    {
       $data = Validator::get( $request->all(),[
       //$data = $request->validate([
        'email' => 'required|max225',
        'password' => 'required|string'
       ]);

       if ($data->fails()){
        return response()->json([
            'success' => false,
            'message' => $data->errors()
        ],401);
       }

       $authatempt = Auth::attempt(['email' => $request->email, 'password' => $request->password]);

       if(!$authatempt){
        return response()->json([
            'success' => false,
            'message' => $data->errors()
        ],401);
       }
       return response()->jason([
        'success' => true,
        'token' => Auth::user()->createToken('API Token')->plainTextToken,
        'user' => Auth::user()
       ]);
    }


    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json(['message'=> 'successfully logged out']);
    }

}
