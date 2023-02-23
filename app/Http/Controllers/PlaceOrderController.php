<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PlaceOrder;
use App\Helpers\Helper;
use Illuminate\Support\Facades\Auth;

class PlaceOrderController extends Controller
{
    public function place()
    {
        return view('user.place_order');

    }

    public function order(Request $request){
        $place_order = $request->transaction_id;

        $transaction_id = \Str::random(11);

        // Helper::IDGenerator(new PlaceOrder,'transaction_id', 6, 'MPG'. Auth::user()->id);
        $charge = 0.05*$request->deposit;

        $place = new PlaceOrder;
        $place->transaction_id = $transaction_id;
        $place->user_id = Auth::user()->id;
        $place->description = $request->description;
        $place->period = $request->period;
        $place->quantity = $request->quantity;
        $place->deposit = $request->deposit;
        $place->charges= $charge;
        $place->total = $request->deposit + $charge;
        $place->seller_id = Auth::user()->id;


        $place->save();
        return redirect()->route('order.details', $place)->with('flash_message', 'You have successfully Placed an Order..')
        ->with('flash_type', 'alert-success');

    }

    public function orderDetails(PlaceOrder $place)
    {
        return view('vieworder.accept_order', compact('place'));

    }

    public function cancelOrder(PlaceOrder $place_order)
    {

        if ($place_order->status != 'pending') {
            return back()->with(['error' => 'Order cannot be cancelled']);
        }

        $place_order->status = 'cancelled';
        $place_order->save();
        return redirect()->route('user.dashboard')->with('flash_message', 'You have Canceled an Order..')
        ->with('flash_type', 'alert-success');;
    }

    // public function refund(PlaceOrder $place_order)
    // {

    //     if ($place_order->status != 'pending') {
    //         return back()->with(['error' => 'Order cannot be refunded']);
    //     }

    //     $place_order->status = 'refunded';
    //     $place_order->save();
    //     return redirect()->route('user.dashboard');
    // }
}
