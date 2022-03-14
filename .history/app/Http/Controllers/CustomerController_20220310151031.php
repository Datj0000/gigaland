<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Social;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

class CustomerController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->all();
        $customer_username = $data['username'];
        $customer_pass = md5($data['password']);
        $result = Customer::where('customer_username', $customer_username)->where('customer_pass', $customer_pass)->first();
        if($result){
            Session::put('customer_id', $result->customer_id);
            Session::put('customer_name', $result->customer_name);
            return 1;
        }
        else{
            return md5($data['password']);
        }
    }
    public function register(Request $request)
    {
        $data = $request->all();
        $register = new Customer();
        $register->customer_name = $data['name'];
        $register->customer_email = $data['email'];
        $register->customer_phone = $data['phone'];
        $register->customer_username = $data['username'];
        $register->customer_pass = $data['pass'];
        $check_username = Customer::where('customer_username', $data['username'])->first();
        $check_email = Customer::where('customer_email', $data['email'])->first();
        // $check_phone = Customer::where('customer_phone', $data['phone'])->first();
        if ($check_username) {
            echo 0;
        }
        else if ($check_email){
            echo 1;
        }
        else {
            $register->save();
            echo 2;
        }
    }
}
