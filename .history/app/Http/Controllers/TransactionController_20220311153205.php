<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Customer;

class TransactionController extends Controller
{
    public function view()
    {
        return view('admin.manage.transaction');
    }
    public function fetchdata()
    {
        $all = Transaction::all();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $transaction = new Transaction();
        $transaction->customer_id = Session::get('customer_id');
        $transaction->txHash = $data['txHash'];
        $transaction->amount = $data['amount'];
        $transaction->save();
        $customer = Customer::where('customer_id', $customer_id)->fr
    }
}
