<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function show(Request $request)
    {
        return view('user.subscription_plan');
    }

    public function store(Request $request)
    {

        $plan = new Plan();
        $plan->name = $request->name;
        $plan->amount = $request->amount;
        $plan->Duration = $request->Duration;
        $plan->save();
        return back();
    }
}
