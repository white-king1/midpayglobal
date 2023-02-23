<?php

namespace App\Http\Controllers;

use App\TransactionWallet;
use App\User;
use Illuminate\Http\Request;

class AlldepositsController extends Controller
{
    public function allDeposits()
    {
        $user = User::all();
        $all_deposits = TransactionWallet::where('is_credit', 1 )->latest()->get();
        return view ('user.all_deposits',compact('all_deposits'));
    }

}
