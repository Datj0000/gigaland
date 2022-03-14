<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function check_login(Request $request)
    {
        $data = $request->all();
        $customer_username = $data[]
        $customer = Customer::where('customer_username', $customer_username)->where('customer_pass', $customer_pass)->first();
    }
}
