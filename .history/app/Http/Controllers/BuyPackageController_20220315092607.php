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
        $i = 1;
        $customer_id = Session::get('customer_id');
        $buypackage = BuyPackage::where('customer_id',$customer_id)->get();
        $output = '<table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Price</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>';
        foreach ($buypackage as $key => $item) {
                $output .= '
                    <tr>
                        <th scope="row">'.$i++.'</th>
                        <td>'.$item->package.'  FPI</td>
                        <td>'.$item->created_at.'</td>
                        ';
                        if($item->statu == 0){
                            $output .= '<td>In progress</td>';
                        }
                        else if($item->statu == 1){
                            $output .= '<td>Failed</td>';
                        }
                        else {
                            $output .= '<td>Succeeded </td>';
                        }
                $output .= '</tr>';
        }
        $output .= '</tbody>
                </table>';
        echo $output;
    }
}
