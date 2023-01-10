<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotRecievedController extends Controller
{
    public function not()
    {
     return view('user.not_recieved');
    }
}
