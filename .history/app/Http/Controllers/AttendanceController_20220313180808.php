<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Statistical;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function create()
    {
        $customer_id = Session::get('customer_id');
        $attendance = new Attendance();
        $attendance->customer_id = 1;
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $check = Attendance::where('customer_id',1)->where('created_at',$today)->first();
        if(!$check){
            $statistical = Statistical::where('customer_id',1)->where('created_at',$today)->first();
            $attendance->save();
        }
    }
}
