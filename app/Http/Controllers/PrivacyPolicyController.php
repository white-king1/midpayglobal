<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function privacy()
    {
        return view('auth.privacy_policy');
    }
}
