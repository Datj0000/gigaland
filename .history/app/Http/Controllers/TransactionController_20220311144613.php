<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function all_Customer()
    {
        return view('admin.manage.customer');
    }
    public function fetchdata()
    {
        $all_customer = Customer::all();
        return response()->json([
            "data" => $all_customer,
        ]);
    }
    public function create_transaction(Request $request)
    {
        $data = $request->all();
        $transaction = new Transaction();
        $transaction->customer_id = 1;
        $transaction->txHash = $data['txHash'];
        $transaction->amount = $data['amount'];
        $transaction->save();
    }
}
