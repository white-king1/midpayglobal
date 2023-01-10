<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InProgressController extends Controller
{
    public function progress()
    {
        return view('user.in-progress');
    }
}
