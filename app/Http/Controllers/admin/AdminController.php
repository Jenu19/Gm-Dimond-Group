<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function checklogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.blog.index')->with('success', 'Login Successfully!');
        } else {
            Auth::logout();
            return redirect()->back()->with('error', 'Email or Password is Invalid!');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect(route('login'));
    }
}
