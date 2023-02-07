<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllrefundsController extends Controller
{
    public function allRefunds()
    {
        return view ('user.all_refunds');
    }
}
