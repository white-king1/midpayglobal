<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlldepositsController extends Controller
{
    public function allDeposits()
    {
        return view ('user.all_deposits');
    }
}
