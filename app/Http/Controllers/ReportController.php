<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report()
    {

        return view('user.report');
    }

    public function reptcong()
    {


        return view('vieworder.report_congrats');
    }
}
