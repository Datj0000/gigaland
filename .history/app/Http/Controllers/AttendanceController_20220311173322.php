<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function create()
    {
        $customer_id = Session::get('customer_id');
        $attendance = new Transaction();
        $attendance->customer_id = $customer_id;

        $transaction->save();
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->customer_money = $customer->customer_money + $data['amount'];
        $customer->save();
    }
}
