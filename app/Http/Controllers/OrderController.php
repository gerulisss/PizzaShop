<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('order.index', ['orders' => $orders]);

    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
