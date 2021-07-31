<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{


    function fetch_chart_data()
    {
        $order = \App\Models\Order::select(
            DB::raw(now()->year),
            DB::raw('MONTH(created_at) as month'),
            DB::raw('Count(status_id =1) as Solid')
        )->groupBy('month')->get();

        return $order;
    }
}
