<?php

namespace App\Http\Controllers;

use App\Models\Entry;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $login = auth()->attempt($request->only('email','password'));

        if($login) return redirect('/gallery');
    }

    public function gallery() {
        $entries = Entry::get();
        return view('gallery.index',[
            'entries' => $entries
        ]);
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }
}
