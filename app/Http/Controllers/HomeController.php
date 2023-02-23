<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function redirect()
    {
       if (Auth::user()->usertype == 'admin') {
           return redirect()->route('admin');
       } else {
           return view('home');
       }

    }
}
