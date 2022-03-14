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
        $all = Transaction::join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_transaction.customer_id')->get();
        // $all = Transaction::with('customer')->get();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function view_detail($customer_id)
    {
        $all = Transaction::join('tbl_customer', 'tbl_customer.customer_id', '=', 'tbl_transaction.customer_id')
        ->where('tbl_transaction.customer_id', $customer_id)->first();
        return response()->json([
            "data" => $all,
        ]);
    }
    public function create(Request $request)
    {
        $data = $request->all();
        $customer_id = Session::get('customer_id');
        $transaction = new Transaction();
        $transaction->customer_id = $customer_id;
        $transaction->txHash = $data['txHash'];
        $transaction->amount = $data['amount'];
        $transaction->tran_form = $data['form'];
        $transaction->tran_to = $data['to'];
        $transaction->save();
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->customer_money = $customer->customer_money + $data['amount'];
        $customer->save();
    }
    public function delete($tran_id)
    {
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->delete();
    }
}
