<?php

namespace App\Http\Controllers;

use App\Payment;
use App\PlaceOrder;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Paystack;

class PaymentController extends Controller
{

/**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway(Request $request, $place_id)
    {
        $placeOrder = PlaceOrder::find($place_id);
        $placeOrder->paystack_reference = $request->reference;
        $placeOrder->save();

        $data = [
            'email' => Auth::user()->email,
            'amount' => $placeOrder->total * 100,
            'currency' => "NGN",
            'reference' => $request->reference,
            'callback_url' => $request->callback_url
        ];

        try{
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();
        $reference = $paymentDetails['data']['reference'];

        $place = PlaceOrder::where('paystack_reference', $reference)->first();
        $place->status = 'paid';
        $place->buyer_id = Auth::user()->id;
        $place->save();

        $payment=new Payment();
        $payment->user_id = Auth::user()->id;
        $payment->email=$paymentDetails['data'] ['customer'] ['email'];
        $payment->status=$paymentDetails['data']['status'];
        $payment->amount=$paymentDetails['data']['amount'];
        $payment->trans_id=$paymentDetails['data']['id'];
        $payment->ref_id= $reference;

        if($payment->save())
        {
            return view('vieworder.success');
        }
        return view('vieworder.form');
    }








    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        return View('vieworder.form');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
