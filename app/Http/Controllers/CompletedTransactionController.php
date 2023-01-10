<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompletedTransactionController extends Controller
{
    public function completed()
    {
        return view('user.completed_transaction');
    }

}
