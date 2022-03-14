<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuyPackage;
use App\Models\Statistical;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;
class BuyPackageController extends Controller
{
    public function create($package)
    {
        $customer_id = Session::get('customer_id');
        $buypackage = new BuyPackage();
        $buypackage->customer_id = $customer_id;
        $buypackage->package = $package;

        $check = BuyPackage::where('customer_id',$customer_id)->orderBy('buypackage_id', 'DESC')->first();
        if($check){
            $nextweek = Carbon::parse($check->created_at)->addDays(7);
            $check_date = BuyPackage::where('customer_id',$customer_id)->where('created_at','>',$nextweek)->first();
            if($check_date){
                $buypackage->save();
                echo 0;
            }
            else{
                echo 1;
            }
        }
        else{
            $buypackage->save();
            echo 0;
        }
    }
}
