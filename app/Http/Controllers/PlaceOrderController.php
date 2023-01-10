<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlaceOrder;
use App\Helpers\Helper;

class PlaceOrderController extends Controller
{
    public function place()
    {  
        return view('user.place_order');
    }

    public function order(Request $request){
        $place_order = $request->transaction_id;
        $transaction_id = Helper::IDGenerator(new PlaceOrder, 'transaction_id', 6, 'MPG');
        $charge = 0.05*$request->deposit;
   
        $place = new PlaceOrder;
        $place->transaction_id = $transaction_id;
        $place->description = $request->description;
        $place->period = $request->period;
        $place->quantity = $request->quantity;
        $place->deposit = $request->deposit;
        $place->charges= $charge;
        $place->total = $request->deposit + $charge;
        $place->save();
        return redirect()->route('order.details', $place);
    }

    public function orderDetails(PlaceOrder $place)
    {
        return view('vieworder.accept_order', compact('place'));

    }
}
