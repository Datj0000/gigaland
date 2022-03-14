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
        $related_movie = Movie::join('tbl_cattegory', 'tbl_cattegory.category_id', '=', 'tbl_movie.category_id')
            ->where('tbl_cattegory.category_id', $movie->category_id)
            ->whereNotIn('tbl_movie.movie_id', [$movie->movie_id])->get();
        $all = Transaction::join(tbl_);
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
}
