<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    public function deposit()
    {

        return view('user.deposit');
    }


    public function confirmDeposit(Request $request)
    {
        dd($request->all());
        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->amount = $request->amount;
        $transaction->quantity = $request->quantity;
        $transaction->currency = $request-> currency;
        $transaction->totalcost = $request->totalcost;
        $transaction->status = 'pending';
        $transaction->save();
    }

}
