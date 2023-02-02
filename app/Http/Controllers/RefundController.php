<?php

namespace App\Http\Controllers;

use App\PlaceOrder;
use App\Refund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefundController extends Controller
{
    public function refund()
    {


        return view('user.refund');
    }


    public function refView(Refund $refund)
    {
        $buy_orders = Refund::where('buyer_id', Auth::user()->id)->latest()->take(3)->get(); //Only orders that have the user id as the auth user id


        return view('vieworder.refund_view', compact('buy_orders', 'refund'));
    }

    public function reforder(Request $request)
    {


        $request->validate([
            'transaction_id' => 'required'
        ]);

        $old_refund = Refund::where('transaction_id', $request->transaction_id)->first();

        if ($old_refund) {
            return back()->with(['error' => 'already created']);
        }

        $refunds = $request->refund_id;

        $refundid = \Str::random(11);

        $refund = new Refund;
        $refund->refund_id = $refundid;
        $refund->transaction_id = $request->transaction_id;
        $refund->reason = $request->reason;
        $refund->buyer_id = Auth::user()->id;
        // $refund->buyer_id = Auth::user()->id;
        // $refund->status = $request->status;

        $refund->save();
        return redirect()->route('ref.details', $refund);
    }

    public function refDetails(Refund $refund)
    {
        return view ('user.refund-id', compact('refund'));
    }

    public function refhis()
    {


        return view('user.refund_history');
    }
}
