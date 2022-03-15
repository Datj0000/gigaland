<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Customer;
use Illuminate\Support\Facades\Session;

class TransactionController extends Controller
{
    public function view()
    {
        return view('admin.manage.transaction');
    }
    public function recharge()
    {
        return view('user.recharge');
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
        $transaction->tran_from = $data['from'];
        $transaction->tran_to = $data['to'];
        $transaction->save();
        $customer = Customer::where('customer_id', $customer_id)->first();
        $customer->customer_balance += $data['amount'];
        Session::put('customer_balance', $customer->customer_balance);
        $customer->save();
    }
    public function delete($transaction_id)
    {
        $transaction = Transaction::where('transaction_id', $transaction_id)->first();
        $transaction->delete();
    }
    public function load_recharge(){
        $i = 0;
        $customer_id = Session::get('customer_id');
        $transaction = Transaction::where('customer_id',$customer_id)->get();
        $output = '<table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>';
        foreach ($transaction as $key => $item) {
                $output .= '
                    <tr>
                        <th scope="row">'.$i++.'</th>
                        <td>'.$item->package.'</td>
                        <td>'.$item->created_at.'</td>
                        ';
                        if($item->statu == 0){
                            $output .= '<td>In progress</td>';
                        }
                        else if($item->statu == 1){
                            $output .= '<td>Failed</td>';
                        }
                        else {
                            $output .= '<td>Succeeded </td>';
                        }
                $output .= '</tr>';
        }
        $output .= '</tbody>
                </table>';
        echo $output;
    }
}
