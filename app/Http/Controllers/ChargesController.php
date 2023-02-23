<?php

namespace App\Http\Controllers;

use App\PlaceOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChargesController extends Controller
{
    public function allCharges ()
    {
        $all_charges = PlaceOrder::all();
        return view ('user.all_charges', compact('all_charges'));
    }
}
