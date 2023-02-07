<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllwithdrawalsController extends Controller
{
    public function allWithdrawals()
    {
        return view('user.all_withdrawals');
    }
}
