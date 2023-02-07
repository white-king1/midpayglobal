<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllreportsController extends Controller
{
    public function allReports()
    {
        return view ('user.all_reports');
    }
}
