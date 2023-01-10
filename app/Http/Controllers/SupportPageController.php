<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportPageController extends Controller
{
    public function support()
    {
        return view('user.support_page');
    }
}
