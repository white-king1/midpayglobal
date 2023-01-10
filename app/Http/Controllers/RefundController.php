<?php

namespace App\Http\Controllers;

use App\Refund;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RefundController extends Controller
{

    public function history()
    {
        $refunds = Refund::latest()->get();

        return view('user.refund_history',compact('refunds'));
    }
    public function refund()
    {


        return view('user.refund');
    }
    public function refcong()
    {


        return view('vieworder.refund_congrats');
    }
    public function page(Request $request)
    {
        $request->validate([
            'reference_number' => 'required'
        ]);

        $old_refund = Refund::where('reference', $request->reference_number)->first();

        if($old_refund){
            return back()->with(['error'=>'already created']);
        }

        $refundid = \Str::random(11);

        $refunds = new Refund();
        $refunds->user_id = Auth::user()->id;
        $refunds->refund_id = $refundid;
        $refunds->reference = $request->reference_number;
        $refunds->reason = 'pending';
        $refunds->status = 'pending';
        $refunds->save();

        return view('user.refund-id',compact('refundid'));
    }
}
