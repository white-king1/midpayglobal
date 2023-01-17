<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\TransactionWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Unicodeveloper\Paystack\Facades\Paystack;

class DepositController extends Controller
{
    public function deposit()
    {
        return view('user.deposit');
    }

    public function depositDetails(Request $request)
    {

        $data = [
            'email' => Auth::user()->email,
            'amount' => $request->amount * 100,
            'currency' => "NGN",
            'reference' => $request->reference,
            'callback_url' => $request->callback_url
        ];

        try {
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }


    public function depositCallback()
    {
        $depositDetails = Paystack::getPaymentData();
        $reference = $depositDetails['data']['reference'];

        $deposit = new TransactionWallet();
        $deposit->user_id = Auth::user()->id;
        $deposit->status = $depositDetails['data']['status'];
        $deposit->amount = $depositDetails['data']['amount'] / 100;
        $deposit->transaction_type_id = 1;

        // $deposit->ref_id= $reference;
        $deposit->is_credit = 1;

        if ($deposit->save()) {
            Auth::user()->wallet->balance += $deposit->amount;
            Auth::user()->wallet->save();

            return view('vieworder.success');
        }
        return view('user.deposit');
    }
}
