<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function AuthLogin()
    {
        $customer_id = Session::get('customer_id');
        if ($admin_id) {
            return Redirect::to('/');
        } else {
            return Redirect::to('login')->send();
        }
    }
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
        return view('user.profile');
    }
    public function test(Request $request)
    {
        return view('test');
    }
}
