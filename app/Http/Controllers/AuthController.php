<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            if (Auth::user()->is_admin == 1) {
                return redirect('/admin');
            } else {
                return back()->with('error', 'Please login with admin credentials');
            }
        } else {
            return redirect()->back()->with([
                "error" => "these information do not match any one of our records"
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }
}
