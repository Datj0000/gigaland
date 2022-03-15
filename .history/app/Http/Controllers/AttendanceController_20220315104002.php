<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Statistical;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AttendanceController extends Controller
{
    public function create($buypackage_id)
    {
        $customer_id = Session::get('customer_id');
        $attendance = new Attendance();
        $attendance->buypackage_id = $buypackage_id;
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $check = Attendance::where('buypackage_id',$buypackage_id)->where('created_at',$today)->first();
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
    public function check()
    {
        // $today = Carbon::now('Asia/Ho_Chi_Minh')->addDays(18)->format('Y-m-d');
        // $ltoday = '2022-03-22';
        // if ($today > $ltoday){
        //     echo $today;
        // }
        // $all_attendance = Attendance::where('atten_day', '<', '7')->get();
        // foreach($all_attendance as $key => $item){
        //     $item->atten_day += 1;
        //     $item->save();
        // }
    }
}
