<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendorRegister extends Controller
{
    public function vendor()
    {
        return view('auth.vendor_register');
    }
}
