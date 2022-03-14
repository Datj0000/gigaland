<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function create_transaction(Request $request)
    {
        $data = $request->all();
        $customer_id = 1;
        $txHash = $data['txHash'];
        $amount = $data['amount'];
        $register = new Customer();
        $register->customer_name = $data['name'];
        $register->customer_email = $data['email'];
        $register->customer_phone = $data['phone'];
        $register->customer_username = $data['username'];
        $register->customer_pass = md5($data['pass']);
        $check_username = Customer::where('customer_username', $data['username'])->first();
        $check_email = Customer::where('customer_email', $data['email'])->first();
        $check_phone = Customer::where('customer_phone', $data['phone'])->first();
        if ($check_username) {
            echo 0;
        }
        else if ($check_email){
            echo 1;
        }
        else if ($check_phone){
            echo 2;
        }
        else {
            $register->save();
    }
}
