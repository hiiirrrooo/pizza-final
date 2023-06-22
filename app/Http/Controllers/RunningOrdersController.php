<?php

namespace App\Http\Controllers;

use App\Models\RunningOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RunningOrdersController extends Controller
{
    function show() {
        $data = RunningOrder::all();
        return view('running', ['running'=>$data]);
    }

    function done($id) {
        DB::update('UPDATE runner_orders SET pickup_time = NOW() WHERE order_id = ?',[$id]);
        DB::select('CALL assignDistDur(?)',[$id]);
        echo "Record updated successfully.";

        return view('orders');
    }
    function cancel($id) {
        DB::update('UPDATE runner_orders SET pickup_time = NULL, distance = NULL, duration = NULL, cancellation = "Cancelled" WHERE order_id = ?',[$id]);
        echo "Record updated successfully.";
        return view('orders');
    }
}
