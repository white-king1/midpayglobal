<?php

namespace App\Http\Controllers;

use App\PlaceOrder;
use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function view()
    {
        return view('vieworder.view');

    }

    public function buyersOrder(Request $request)
    {
        $order =  PlaceOrder::where('transaction_id', '=', $request->transaction_id )->first();
        if($order ==null){
            return back()->with(['error' => 'WRONG TRANSACTION ID']);
        }
        // $buyer->transaction_id = $transaction_id;
        return redirect()->route('order.details', $order);
    }
}
