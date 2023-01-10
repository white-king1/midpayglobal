<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecievedController extends Controller
{
    public function recieved()
    {
        return view('user.recieved');
    }
}
