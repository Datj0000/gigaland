<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create_transaction(Request $request)
    {
        $data = $request->all();
        $customer_id = $data['txHash'];
        $txHash = $data['txHash'];
        $amount = $data['amount'];
    }
}
