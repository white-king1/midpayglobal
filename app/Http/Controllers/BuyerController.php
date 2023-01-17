<?php

namespace App\Http\Controllers;

use App\PlaceOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    public function viewSeller()
    {
        return view('vieworder.view_seller_order');

    }

    public function vsoDetails(Request $request)
    {
        $place = new PlaceOrder;
        dd($place);
        $place->transaction_id = $request->transaction_id;
        $place->description = $request->description;
        $place->period = $request->period;
        $place->quantity = $request->quantity;
        $place->deposit = $request->deposit;
        $place->charges= $request->charge;
        $place->total = $request->deposit + $request->charge;
        $place->seller_id = Auth::user()->id;
        $place->save();
        return redirect()->route('vieworder.vso_details', $place);
    }


    public function viewBuyer()
    {
        return view('vieworder.view_buyer_order');

    }

    public function vboDetails()
    {
        return view('vieworder.vbo_details');

    }

}
