<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
    //

    // user signup
    public function create()
    {
      return view('users.create');
    }

    public function login()
    {
        return view('users.login');
    }

    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }
}
