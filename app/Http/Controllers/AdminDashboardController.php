<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function admin (){
    return view('user.admin_dashboard');
    }
}
