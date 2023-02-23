<?php

namespace App\Http\Controllers;

use App\Mail\WithdrawalDetails;
use App\TransactionWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    public function withdrawal()
    {
        return view('user.withdrawal');
    }

    public function withdrawalDetails(Request $request)
    {
        if (Auth::user()->wallet->balance <= $request->amount + 100) {
            return redirect()->back()->with('flash_message', 'You have insufficient Balance .')
            ->with('flash_type', 'alert-success');
        }else{


        $details = $request->account_name . ' ,' . $request->account_number . ' ,' . $request->bank;
        $withdraw =  new TransactionWallet();
        $withdraw->details = $details;
        $withdraw->user_id = Auth::user()->id;
        $withdraw->amount = $request->amount;
        $withdraw->transaction_type_id = 2;
        $withdraw->is_credit = 0;
        $withdraw->save();



        Auth::user()->wallet->balance -= $withdraw->amount + 100;
        Auth::user()->wallet->save();


        // Mail::to('midfeeglobal@gmail.com')->send(new WithdrawalDetails($withdraw));

        return redirect()->back()->with('flash_message', 'Withdrawal Successful & you will be credited in 10-15minutes .')
            ->with('flash_type', 'alert-success');
        // return view('user.thanks');
    }
    }
}
