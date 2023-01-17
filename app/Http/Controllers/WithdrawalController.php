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
            Auth::user()->wallet->balance -= $withdraw->amount;
            Auth::user()->wallet->save();

            return redirect()->route('thanks', $withdraw);
        }
        return view('user.withdrawal');
        // $withdraw->save();
        // return redirect()->route('thanks', $withdraw);
    }
}
