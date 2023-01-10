<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CongratsSellerController extends Controller
{
    public function congrats()
    {
        return view('vieworder.congrats_seller');
    }
}
