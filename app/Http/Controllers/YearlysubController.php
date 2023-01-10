<?php

namespace App\Http\Controllers;

use App\Plan;
use App\Yearlysub;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class YearlysubController extends Controller
{
    public function fetch($id)
    {
        $plan = Plan::find($id);
        return view('user.vendor_deposit', compact('plan'));
    }
    public function subscribe(Request $request, Plan $plan)
    {

        $yearlysub = Auth::user()->yearlysub()->create([
            'plan_id' => $plan->id,
            'amount' => $plan->amount,
            'expiration_date' => now()->addDays($plan->Duration),
            'reference' => $request->reference,

        ]);

        $request->amount = $plan->amount * 100;

        try {
            return \Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            $yearlysub->status = 'Failed';
            $yearlysub->save();
            return Redirect()->back()->withMessage(['error' => 'Error while processing payment']);
        }
    }

    public function yerlysubCallback()
    {
        // Get payment details from paystack
        $paymentDetails = \Paystack::getPaymentData();


        // GET REFERENCE FROM PAYMET DETAILS GOTTEN
        $reference = $paymentDetails['data']['reference'];



        // GET TRANSACTION FROM DATABASE
        $yearlysub = Yearlysub::where('reference', $reference)->first();

        // CHECK IF TXN HAS BEEN PAID
        if ($paymentDetails['data']['status'] != 'success') {
            $yearlysub->status = 'failed';
            $yearlysub->save();
            return back()->with(['error' => 'failed transaction, please try again']);
        }
        $yearlysub->status = 'Active';
        $yearlysub->save();

        return redirect()->route('user.dashboard')->with(['success' => 'Subscription successful']);
    }
}
