<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function check_login(Request $request)
    {
        $data = $request->all();
        $admin = Cus::where('admin_id', $admin_id)->first();
    }
}
