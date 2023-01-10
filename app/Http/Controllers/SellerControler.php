<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerControler extends Controller
{
    public function seller()
    {
        return view('vieworder.seller');
    }
}
