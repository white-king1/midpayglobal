<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentPageController extends Controller
{

    public function payment($ref)
    {
        $transaction = Transaction::where('reference', $ref)->first();
        return view('user.payment-page',compact('transaction'));
    }

    public function transaction(Request $request)
    {

        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->description = $request->description;
        $transaction->reference = $request->reference;
        $transaction->quantity = $request->quantity;
        $transaction->currency = $request-> currency;
        $transaction->totalcost = $request->totalcost;
        $transaction->save();
    }

}

