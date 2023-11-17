<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    // FUNGSI INDEX
    function index() {
        return view('login');
    }

    function login(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email'=>$request->email,
            'password' =>$request->password, 
        ];

        if(Auth::attempt($infologin)) {
            if(Auth::user()->role == 'admin') {
                return redirect('/admin');
            } else if (Auth::user()->role == 'mentor') {
                return redirect('/mentor');
            } else if (Auth::user()->role == 'siswa') {
                return redirect('/magang');
            } 
        } else {
            return redirect('')->withErrors(['error' => 'Username dan Password yang dimasukkan tidak sesuai'])->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return Redirect('/');
    }
}
