<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeclineSellerController extends Controller
{
    public function decline()
    {
        return view('vieworder.decline_seller');
    }
}
