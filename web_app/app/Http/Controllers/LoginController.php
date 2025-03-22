<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login'); 
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'uname' => 'required', 
            'psw' => 'required'
        ]);

        if ($request->uname === 'admin' && $request->psw === '12345678') {
            session(['admin_logged_in' => true]);
            return redirect('/admin');
        }
        return redirect ()->back()->withErrors(['Invalid Credentials']);
    }
}
