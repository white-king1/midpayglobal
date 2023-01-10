<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemDeliveredController extends Controller
{
    public function itemd(){
     return view('vieworder.delivered_items');
    }

    public function refview(){
        return view('vieworder.refund_view');
       }
}
