<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class RegController extends Controller
{
    public function show()
    {
        return view('auth.reg');
    }

    public function reg(Request $request)
    {

        
        $request->validate([
            'name' => 'required||max:255',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
        ]);

        Auth::login($user);

        return redirect('/');

    }
}
