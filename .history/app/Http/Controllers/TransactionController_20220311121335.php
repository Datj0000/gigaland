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
        $customer_id = 1;
        $transaction->txHash = $data['name'];
        $transaction->amount = $data['email'];

            $register->save();
    }
}
