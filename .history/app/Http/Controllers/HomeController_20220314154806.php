<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Customer;
class HomeController extends Controller
{
    public function view_home()
    {
        $customer_id = Session::get('customer_id');
        if ($customer_id) {
            $check_attendance = Customer::where('customer_id', )->first();
            return view('user.home');
        }
        else{
            return view('user.home');
        }
    }
    public function view_login()
    {
        $customer_id = Session::get('customer_id');
        if ($customer_id) {
            return Redirect::to('/');
        }
        else{
            return view('user.login');
        }
    }
    public function view_register()
    {
        $customer_id = Session::get('customer_id');
        if ($customer_id) {
            return Redirect::to('/');
        }
        else{
            return view('user.register');
        }
    }
    public function view_profile()
    {
        $customer_id = Session::get('customer_id');
        if ($customer_id) {
            return view('user.profile');
        }
        else{
            return Redirect::to('/dang-nhap');
        }
    }
    public function view_changepass()
    {
        $customer_id = Session::get('customer_id');
        $customer_pass = Session::get('customer_pass');
        if(!$customer_pass){
            return Redirect::to('/');
        }
        else if ($customer_id) {
            return view('user.changepass');
        }
        else{
            return Redirect::to('/dang-nhap');
        }
    }
    public function view_buy()
    {
        return view('user.buy');
    }
    public function test(Request $request)
    {
        return view('test');
    }
}
