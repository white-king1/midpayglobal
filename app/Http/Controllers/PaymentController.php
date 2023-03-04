<?php

namespace App\Http\Controllers;

use App\Mail\PaymentMaid;
use App\Mail\PurchaseDetails;
use App\Payment;
use App\PlaceOrder;
use App\Transaction;
use App\User;
use App\Wallet;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

        $u = User::where('id',$place_id->id)->first();
        Mail::to($u->email)->send(new PaymentMaid($placeOrder));
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

// AFTER THE BUYER CLICKS ON RECIEVED IT SHOULD RETURN COMPLETED TRANSACTION
    public function recievedOrder(  $transaction_id)
    {

        $deposit = PlaceOrder::where('transaction_id', $transaction_id)->first();

        $seller = User::find($deposit->seller_id);

        if ($deposit->status == 'paid') {

            $wallet= Wallet::where('user_id',$seller->id)->first();
            $wallet->increment('balance', $deposit->deposit);
            $wallet->save();

            $deposit->status = 'completed';
            $deposit->save();

            Mail::to($seller->email)->send(new PurchaseDetails($deposit));


            return view('vieworder.success');
        }

        return back()->with(['error' => 'Transaction cannot be updated']);
    }

    // PAY FROM WALLET
    public function walletPay(Request $request, $place_id)
    {
        $place= PlaceOrder::find($place_id);
        $place->buyer_id=Auth::user()->id;
        $place->save();

        if(Auth::user()->wallet->balance <= $place->deposit + 0.03 * $place->deposit){

           return redirect()->route('insufpay.funds', $place);

        }else{

           $money = $place->deposit;

           $place = PlaceOrder::where('transaction_id', $money)->first();
           $place->status = 'paid';
           $place->buyer_id = Auth::user()->id;
           $place->save();

        //    $seller= Wallet::where('user_id',$place->seller_id)->first()->increment('balance',$money);

           $buyer = Wallet::where('user_id',$place->buyer_id)->first()-> decrement ('balance',$money);

        }
        return view('vieworder.success');

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
