<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgressController extends Controller
{
    public function progress()
    {
        return view('user.in-progress');
    }
}
