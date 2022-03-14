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
        $attendance->txHash = $data['txHash'];
        $transaction->amount = $data['amount'];
        $transaction->tran_form = $data['form'];
        $transaction->tran_to = $data['to'];
        $transaction->save();
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->customer_money = $customer->customer_money + $data['amount'];
        $customer->save();
    }
}
