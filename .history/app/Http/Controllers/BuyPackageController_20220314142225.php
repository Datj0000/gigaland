<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyPackage;
use App\Models\Statistical;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class BuyPackageController extends Controller
{
    public function create()
    {
        $customer_id = Session::get('customer_id');
        $buypackage = new BuyPackage();
        $buypackage->customer_id = $customer_id;
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');
        $check = BuyPackage::where('customer_id',$customer_id)->where('created_at',$today)->first();
        if($check_statistical){
            $check_statistical->save();
        }
        else{
            $statistical = new Statistical();
            $statistical->save();
        }
        $buypackage->save();
        echo 1;
    }
}
