<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    // user signup
    public function create()
    {
      return view('users.create');
    }
}
