<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function create_transaction(Request $request)
    {
        $data = $request->all();
        $transaction = new Customer();
        $transaction->customer_id = 1;
        $transaction->txHash = $data['txHash'];
        $transaction->amount = $data['email'];
        $transaction->save();
    }
}
