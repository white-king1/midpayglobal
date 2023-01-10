<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function buyer()
    {
        return view('vieworder.buyer');
    }

    public function view()
    {
        return view('vieworder.view');
    }
}
