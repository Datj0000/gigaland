<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function check_login()
    {
        return view('user.login');
    }
}
