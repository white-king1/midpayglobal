<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;

class AcceptOrderController extends Controller
{
    public function accept (Request $request )
    {
        
        // $reference = \Str::random(4) . rand(a,z).Auth::user()->id;
        // $transaction = Transaction::where('reference', $request->reference)->first();
        return view('vieworder.accept_order');
    }

    
}
