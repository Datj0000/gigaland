<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\Customer;
use App\Models\BuyPackage;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function view_home()
    {
        $customer_id = Session::get('customer_id');
        $attendance = 0;
        if ($customer_id) {
            $check_attendance = BuyPackage::where('customer_id', $customer_id)->first();
            $today = Carbon::now('Asia/Ho_Chi_Minh');
            $check_package = BuyPackage::where('customer_id',$customer_id)->where('created_at','<=',$today)->first();
            $check_hour = Carbon::now('Asia/Ho_Chi_Minh')->format('H-i');
            if ($check_package && '06-00' <= $check_hour && $check_hour <= '06-30') {
                $attendance = $check_package->pac;
            }
            return view('user.home')->with('attendance', $attendance);
        }
        else{
            return view('user.home')->with('attendance', $attendance);
        }
    }
    public function view_login()
    {
        $customer_id = Session::get('customer_id');
        if ($customer_id) {
            return Redirect::to('/');
        }
        else{
            return view('user.login');
        }
    }
    public function view_register()
    {
        $customer_id = Session::get('customer_id');
        if ($customer_id) {
            return Redirect::to('/');
        }
        else{
            return view('user.register');
        }
    }
    public function view_profile()
    {
        $customer_id = Session::get('customer_id');
        if ($customer_id) {
            return view('user.profile');
        }
        else{
            return Redirect::to('/dang-nhap');
        }
    }
    public function view_changepass()
    {
        $customer_id = Session::get('customer_id');
        $customer_pass = Session::get('customer_pass');
        if(!$customer_pass){
            return Redirect::to('/');
        }
        else if ($customer_id) {
            return view('user.changepass');
        }
        else{
            return Redirect::to('/dang-nhap');
        }
    }
    public function view_buy()
    {
        return view('user.buy');
    }
    public function test(Request $request)
    {
        return view('test');
    }
}
