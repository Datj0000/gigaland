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

        $check = BuyPackage::where('customer_id',$customer_id)->where('status',0)->orderBy('buypackage_id', 'DESC')->first();
        $check_balance = Customer::where('customer_id',$customer_id)->first();
        if($check){
            $nextweek = Carbon::parse($check->created_at)->addDays(7);
            $check_date = BuyPackage::where('customer_id',$customer_id)->where('status',0)->where('created_at','>',$nextweek)->first();
            if($check_date){
                if($check_balance->customer_balance >= $package){
                    $check_balance->customer_balance -= $package;
                    $check_balance->save();
                    $buypackage->save();
                    Session::put('customer_balance', $check_balance->customer_balance);
                    echo 0;
                }
                else{
                    echo 2;
                }
            }
            else{
                echo 1;
            }
        }
        else{
            if($check_balance->customer_balance >= $package){
                $buypackage->save();
                $check_balance->customer_balance -= $package;
                $check_balance->save();
                Session::put('customer_balance', $check_balance->customer_balance);
                echo 0;
            }
            else{
                echo 2;
            }
        }
    }
    public function load_package(){
        $customer_id = Session::get('customer_id');
        $buypackage = BuyPackage::where('customer_id',$customer_id)->get();
        $output = '<table>
                    <tr>
                        <th>No.</th>
                        <th>Price</th>
                        <th>Created at</th>
                        <th>Status</th>
                    </tr>';
        foreach ($buypackage as $key => $item) {
                $output .= '
                    <tr class="table_row">
                    <td class="column-1">
                        <div data-cart_name="' . $cart['product_name'] . '" data-session_id="' . $cart['session_id'] . '"
                        class="how-itemcart1 delete_cart">
                            <img src="' . asset('public/uploads/product/' . $cart['product_image']) . '" alt="IMG">
                        </div>
                    </td>
                    <td class="column-2">' . $cart['product_name'] . '</td>
                    <td class="column-3">' . number_format($cart['product_price'], 0, ',', '.') . 'đ</td>
                    <td class="column-4">
                    ';
        }
    }
}