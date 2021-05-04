<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\Admin;


class AdminController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if( Auth::guard('admin')->attempt($credentials,$request->remember))
        {
            $request->session()->regenerate();
            $user=Admin::where('email',$request->email)->first();
            Auth::guard('admin')->login($user);
            return redirect()->route('admin.home');
        }
        return redirect()->route('admin.login')->with('status','You are not Admin');
    }
}
