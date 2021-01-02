<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisteredUserController extends Controller
{
    /* otvori registracijsku formu */
    public function create()
    {
        
        return view('auth.register');
    }

    /* pozvano na Register gumb */
    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:7|confirmed',
            
        ]);

        $data['role_id'] = 2; /* hardkodirano na 'User' jer samo admin može dodati drugog admina */
        $data['password'] = Hash::make($data['password']);

        /* dodaj korisnika u bazu */
        $user = User::create($data);

        /* prijavi se u sustav novim korisnikom */
        Auth::login($user);
        event(new Registered($user));
        return redirect()->route('home');
    }
}