<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function check_login(Request $request)
    {
        $data = $request->all();
        $customer = Customer::where('customer_username', $admin_id)->first();
    }
}
