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
            return 0;
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
        $check_username = Customer::where('customer_username', $data['username'])
            ->where('customer_product', $data['customer_product'])->first();
        if ($check) {
            echo 0;
        } else {
            $register->save();
            $id = $register->customer_id;
            echo $id;
        }
    }
}
