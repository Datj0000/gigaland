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
        $register->amount = $data['email'];

            $register->save();
    }
}