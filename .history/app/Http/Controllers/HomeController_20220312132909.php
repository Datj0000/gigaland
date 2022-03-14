<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function AuthLogin()
    {
        $customer_id = Session::get('customer_id');
        if ($customer_id) {
            return Redirect::to('/');
        }
    }
    public function view_home()
    {
        return view('user.home');
    }
    public function view_login()
    {
        $this->AuthLogin();
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
