<?php

namespace App\Http\Controllers;

use App\PlaceOrder;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllPaidOrdersController extends Controller
{
    public function allPaidorders()
    {
        $user = User::all();
        $all_paidorders = PlaceOrder::where('status' ,'paid')->get();
       

        return view ('user.all_paidorders', compact('all_paidorders'));
    }
}
