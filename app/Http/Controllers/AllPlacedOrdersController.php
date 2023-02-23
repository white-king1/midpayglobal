<?php

namespace App\Http\Controllers;

use App\PlaceOrder;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllPlacedOrdersController extends Controller
{
    public function allPlacedorders()
    {
        $user = User::all();
        $all_placeorders = PlaceOrder::all();
        return view ('user.all_placeorders', compact('all_placeorders'));
    }
}
