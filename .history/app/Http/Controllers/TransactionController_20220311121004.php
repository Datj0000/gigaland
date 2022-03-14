<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create_transaction(Request $request)
    {
        $data = $request->all();
        $txHash = $data['txHash'];
        $transaction_a = $data['amount'];
    }
}
