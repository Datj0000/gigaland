<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyPackageController extends Controller
{
    public function create()
    {
        $customer_id = Session::get('customer_id');
        $attendance = new Attendance();
        $attendance->customer_id = $customer_id;
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $check = Attendance::where('customer_id',$customer_id)->where('created_at',$today)->first();
        if(!$check){
            $check_statistical = Statistical::where('statistical_time',$today)->first();
            if($check_statistical){
                $check_statistical->statistical_quantity += 1;
                $check_statistical->save();
            }
            else{
                $statistical = new Statistical();
                $statistical->statistical_quantity = 1;
                $statistical->save();
            }
            $attendance->save();
            echo 1;
        }
    }
}
