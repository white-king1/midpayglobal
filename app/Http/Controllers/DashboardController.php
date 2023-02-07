<?php

namespace App\Http\Controllers;

use App\PlaceOrder;
use App\TransactionWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // $orders =  PlaceOrder::all(); fetch all orders
        $sell_orders = PlaceOrder::where('seller_id', Auth::user()->id)->latest()->take(3)->get(); //Only orders that have the user id as the auth user id
        $buy_orders = PlaceOrder::where('buyer_id', Auth::user()->id)->latest()->take(3)->get(); //Only orders that have the user id as the auth user id


        return view('user.dashboard', compact('sell_orders','buy_orders'));
    }

    
}
