<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function new(Request $request)
    { 
        $request->validate([
            'name' => 'required|max:255',
        ]);

       Post::create([
            'text'=>$request->name,
            'user_id'=>Auth::id()
        ]);

        return redirect('/');

    
}

public function profile()
{ 
    
    return view('profile', ['posts' =>Post::all()->where('user_id', Auth::id())]);

}

}





