<?php

namespace App\Http\Controllers;

use App\PlaceOrder;
use App\Refund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefundController extends Controller
{

    // public function history()
    // {
    //     $refunds = Refund::latest()->get();

    //     return view('user.refund_history',compact('refunds'));
    // }
    public function refund()
    {


        return view('user.refund');
    }
    // public function refcong()
    // {


    //     return view('vieworder.refund_congrats');
    // }


public function refView(){
    // $orders =  PlaceOrder::all();
    $sell_orders = Refund::where('seller_id', Auth::user()->id)->latest()->take(3)->get(); //Only orders that have the user id as the auth user id
    $buy_orders = Refund::where('buyer_id', Auth::user()->id)->latest()->take(3)->get(); //Only orders that have the user id as the auth user id


    return view ('vieworder.refund_view', compact ('sell_orders','buy_orders'));
}

    public function reforder(Request $request)
    {
        $request->validate([
            'transaction_id' => 'required'
        ]);

        $old_refund = Refund::where('transaction_id', $request->transaction_id)->first();

        if($old_refund){
            return back()->with(['error'=>'already created']);
        }

        $refundid = \Str::random(11);

        $refunds = new Refund();
        $refunds->user_id = Auth::user()->id;
        $refunds->refund_id = $refundid;
        $refunds->transaction_id = $request->transaction_id;
        $refunds->reason = $request->reason;
        $refunds->save();


       dd('Refunded now');
        return redirect()->route('refid' ,$refundid);
    }

    public function refhis()
    {


        return view('user.refund_history');
    }
}
