<?php

namespace App\Http\Controllers;

use App\PlaceOrder;
use App\Refund;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllrefundsController extends Controller
{
    public function allRefunds()
    {
        $user = User:: latest()->get() && PlaceOrder:: latest()->get();
        $all_refunds = Refund::with('user')->latest()->get();
        return view ('user.all_refunds', compact('all_refunds'));
    }

    public function paidRefunds($id)
    {
     $refund = Refund::find($id);
     $refund->status = 'refunded';
     $refund->save();
     return redirect()->route('all.refunds');
    }
}
