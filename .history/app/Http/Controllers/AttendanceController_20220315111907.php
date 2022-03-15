<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\BuyPackage;
use App\Models\Wallet;
use App\Models\Statistical;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class AttendanceController extends Controller
{
    public function create($buypackage_id)
    {
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
            $check_attendane = Attendance::where('buypackage_id',$buypackage_id)->get();

            if($check_attendane->count() == 7){
                $buypackage = BuyPackage::where('buypackage_id',$buypackage_id)->where('status', 0)->first();
                $buypackage->status = 2;
                $buypackage->save();
                $customer_id = Session::get('customer_id');
                $customer = Customer::where('customer_id',$customer_id)->first();
                $customer->customer_balance += $buypackage->package;
                $customer->save();
                echo 0;
            }
            else{
                echo 1;
            }
        }else{
            
        }
    }
    public function check()
    {
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $buypackage = BuyPackage::where('status', '0')->get();
        foreach($buypackage as $key => $item){
            $item->buypackage_id;
            $attendance = Attendance::where('buypackage_id', $item->buypackage_id)->orderBy('attendance_id', 'DESC')->first();
            if($attendance->created_at < $today){
                $item->status = 1;
                $check_wallet = Wallet::where('created_at',$today)->first();
                if($check_wallet){
                    $check_wallet->wallet_balance += $item->package;
                    $check_wallet->save();
                }
                else{
                    $wallet = new Wallet();
                    $wallet->wallet_balance = $item->package;
                    $wallet->save();
                }
                $item->save();
            }
        }
    }
}
