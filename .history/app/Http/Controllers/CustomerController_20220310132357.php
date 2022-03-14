<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function check_login(Request $request)
    {
        $data = $request->all();
        $admin = Customer::where('admin_id', $admin_id)->first();
    }
}
