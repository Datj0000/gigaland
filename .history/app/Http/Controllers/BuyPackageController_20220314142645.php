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


        $nextweek = Carbon::now('Asia/Ho_Chi_Minh')->addDays(7);
        $buypackage->save();
        echo 1;
    }
}
