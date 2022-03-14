<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    public function CheckLogin()
    {
        $customer_id = Session::get('customer_id');
        if (!$customer_id) {
            return Redirect::to('/');
        }
    }
    public function view_home()
    {
        return view('user.home');
    }
    public function view_login()
    {
        $customer_id = Session::get('customer_id');
        if (!$customer_id) {
            return Redirect::to('/');
        }
        return view('user.login');
    }
    public function view_register()
    {
        $this->CheckLogin();
        return view('user.register');
    }
    public function view_profile()
    {
        $this->CheckLogin();
        return Redirect::to('/dang-nhap');
    }
    public function view_changepass()
    {
        $this->CheckLogin();
        return Redirect::to('/dang-nhap');
    }
    public function test(Request $request)
    {
        return view('test');
    }
}
