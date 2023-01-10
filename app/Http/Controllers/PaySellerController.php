<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PaySellerController extends Controller
{
    public function pay()
    {
        // $request->validate([
        //     'password'=>'required'
        // ]);

        // if(!Hash::check($request->password, Auth::user()->passowrd)){
        //     return back()->with(['error'=>'Incorreect password']);
        // }
        return view('user.payseller');
    }
}
