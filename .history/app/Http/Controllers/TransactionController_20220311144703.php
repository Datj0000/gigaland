<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function view()
    {
        return view('admin.manage.transaction');
    }
    public function fetchdata()
    {
        $all_Transaction = Transaction::all();
        return response()->json([
            "data" => $all_Transaction,
        ]);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $transaction = new Transaction();
        $transaction->customer_id = 1;
        $transaction->txHash = $data['txHash'];
        $transaction->amount = $data['amount'];
        $transaction->save();
    }
}
