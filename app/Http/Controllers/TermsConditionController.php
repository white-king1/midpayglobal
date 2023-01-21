<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    public function terms()
    {
        return view('vieworder.terms_condition');
    }
}
