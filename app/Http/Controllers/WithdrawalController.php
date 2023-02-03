<?php

namespace App\Http\Controllers;

use App\TransactionWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WithdrawalController extends Controller
{
    public function withdrawal()
    {
        return view('user.withdrawal');
    }

    public function withdrawalDetails(Request $request)
    {
        $details = $request->account_name . ' ,' . $request->account_number . ' ,'.$request->bank;
        $withdraw =  new TransactionWallet();
        $withdraw->details = $details;
        $withdraw->user_id = Auth::user()->id;
        $withdraw->amount = $request->amount;
        $withdraw->transaction_type_id = 2;
        $withdraw->is_credit = 0;

        if ($withdraw->save()) {

            if(Auth::user()->wallet->balance <= $withdraw->amount+100){
                return redirect()->route('insufficient', $withdraw);
            }else {
                Auth::user()->wallet->balance -= $withdraw->amount+100;
                Auth::user()->wallet->save();
                return view('user.thanks');

            }


        }

        // $withdraw->save();
        // return redirect()->route('thanks', $withdraw);
    }
}
