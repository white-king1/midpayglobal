<?php

namespace App\Http\Controllers;

use App\TransactionWallet;
use App\User;
use Illuminate\Http\Request;

class AllwithdrawalsController extends Controller
{
    public function allWithdrawals()
    {
        $user = User:: latest()->get();
        $all_withdrawals = TransactionWallet::where('is_credit',  0)->latest()->get();
        return view('user.all_withdrawals', compact('all_withdrawals'));
    }

    public function paidWithdrawals($id)
    {
        $withdraw = TransactionWallet::find($id);
        $withdraw->status = 'success';
        $withdraw->save();
        return redirect()->route('all.withdrawals');
    }
}
