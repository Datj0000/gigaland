<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyPackage;
use App\Models\Statistical;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class BuyPackageController extends Controller
{
    public function create($package)
    {
        $customer_id = Session::get('customer_id');
        $buypackage = new BuyPackage();
        $buypackage->customer_id = $customer_id;
        $buypackage->package = $package;
        // $today = Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d');

        $check = BuyPackage::where('customer_id',$customer_id)->first();
        if($check){
            echo 1;
            $nextweek = Carbon::parse($buypackage->created_at)->addDays(7);
            echo $nextweek;
        }
        else{
            $buypackage->save();
            echo 0;
        }
    }
}
