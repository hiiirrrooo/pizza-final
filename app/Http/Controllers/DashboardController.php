<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class DashboardController extends Controller
{
    public function show(){
        return view('dashboard');
    }

    public function showOrders(){
        return view('orders');
    }

    public function showReports(){
        return view('reports');
    }

    public function showHistory(){

        $data = simplexml_load_file(resource_path('/xml-loading/orderhistory.xml'))
        or die("Error: Cannot create object");

        return view('orderhistory',['xml'=>$data]);
    }
}
