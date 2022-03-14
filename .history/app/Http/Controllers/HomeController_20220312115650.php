<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function view_home()
    {
        return view('user.home');
    }
    public function view_login()
    {
        return view('user.login');
    }
    public function view_register()
    {
        return view('user.register');
    }
    public function view_profile()
    {
        return view('user.register');
    }
    
    public function test(Request $request)
    {
        return view('test');
    }
}
