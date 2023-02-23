<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AllusersController extends Controller
{
    public function allUsers()
    {
        $all_users = User::latest()->get();
        return view ('user.all_users', compact('all_users'));
    }

    public function deleteUsers($id)
    {
          $user = User::find($id);
          $user->delete();
          return redirect()->route('all.users');
    }
}
