<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThanksController extends Controller
{
    public function thanks()
    {
        return view('user.thanks');
    }

    public function insufficientFunds()
    {
        return view ('user.insufficient');
    }

    public function insufPayfunds()
    {
        return view ('user.insuf_payfunds');
    }
}
