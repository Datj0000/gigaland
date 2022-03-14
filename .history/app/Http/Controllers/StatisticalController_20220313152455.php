<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Statistical;
use Carbon\Carbon;

class StatisticalController extends Controller
{
    public function view()
    {
        return view('admin.manage.statistical');
    }
    public function filter_by_date(Request $request)
    {
        $data = $request->all();
        $from_date = Carbon::parse($data['from_date'])->format('Y-m-d');
        $to_date = Carbon::parse($data['to_date'])->format('Y-m-d');
        $get = Statistical::whereBetween('order_date', [$from_date, $to_date])->orderBy('order_date', 'ASC')->get();
        $check = $get->count();
        if ($check > 0) {
            foreach ($get as $key => $val) {
                $chart_data[] = array(
                    'statistical_time' => $val->order_date,
                    'order' => $val->total_order,
                    'sales' => $val->sales,
                    'profit' => $val->profit,
                    'quantity' => $val->quantity
                );
            }
        } else {
            $chart_data[] = array(
                'period' => 0,
                'order' => 0,
                'sales' => 0,
                'profit' => 0,
                'quantity' => 0
            );
        }
        echo $data = json_encode($chart_data);

    }
}
