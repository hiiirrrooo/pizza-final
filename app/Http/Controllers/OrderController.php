<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request) {
        $order = new Order;
        $order->custname = $request->input('custname');
        $order->custaddr = $request->input('custaddr');
        $order->pizza_id = $request->input('pizza_id');
        $order->exclusion = $request->input('exclusion');
        $order->extras = $request->input('extras');
        $order->howmany = $request->input('howmany');
        $order->save();
        
        return redirect('/');
    }

    public function read() {
        $rows = \DB::select('select * from daily_sales');
        foreach ($rows as $row) {
            var_dump($row->field);
        }
    }
}
