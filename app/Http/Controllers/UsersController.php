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


    public function store(Request $request)
    {
        $validatedData = $request->validate([
        'email' => 'email|required|unique:users|max:255',
        'password' => 'required',
    ]);


        $user=User::create([
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            ]) ;

        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');
        return redirect()->route('users.show',[$user]);
    }
}
