<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class TransactionController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'description' => 'string|required',
            'quantity' => 'integer|required',
            'currency' => 'string|required',
            'totalcost' => 'integer|required',
        ]);

        $ref = \Str::random(6);

        $transaction = new Transaction();
        $transaction->user_id = Auth::user()->id;
        $transaction->description = $request->description;
        $transaction->quantity = $request->quantity;
        $transaction->currency = $request-> currency;
        $transaction->totalcost = $request->totalcost;
        $transaction->reference = $ref;
        $transaction->status = 'pending';
        $transaction->save();


        return Redirect::route('payment',$transaction->reference);
        //return back()->with(['success'=> 'transaction created successfully'])
    }

    public function decline(Request $request){

    }


}
