<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function create_transaction(Request $request)
    {
        $data = $request->all();
        $register = new Customer();
        $customer_id = 1;
        $txHash = $data['txHash'];
        $amount = $data['amount'];

        $register->txHash = $data['name'];
        $register->amount = $data['email'];

            $register->save();
    }
}
