<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\Welcome;

class RegistrationController extends Controller
{
    public function create(){
        return view('registration.create');
    }
    public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
            ]);
        \Mail::to($user)->send(new Welcome($user));
        auth()->login($user);
        session()->flash('message', 'Thank you for registering!');
        return redirect()->home();
    }
}
