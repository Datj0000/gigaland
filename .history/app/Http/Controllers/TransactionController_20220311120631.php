<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function create_transaction(Request $request)
    {
        $data = $request->all();
        $transaction = $data['username'];
        $transaction = md5($data['password']);
    }
}
