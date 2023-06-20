<?php

namespace App\Http\Controllers;

use App\Models\PizzaCount;
use Illuminate\Http\Request;

class PizzaCountsController extends Controller
{
    function show() {
        $data = PizzaCount::paginate(3);
        return view('pizza',['pizzacounts'=>$data]);
    }
}
