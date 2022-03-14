<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function create()
    {
        $customer_id = Session::get('customer_id');
        $attendance = new Transaction();
        $attendance->customer_id = 1;
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        // $check = Transaction::where('customer_id',1)->where('created_at',$today)->first();
        // if(!$check){
        //     $attendance->save();
        // }
    }
}
