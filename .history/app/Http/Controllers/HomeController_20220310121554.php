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
        return view('user.home');
    }
    public function view_register()
    {
        return view('user.home');
    }
}
