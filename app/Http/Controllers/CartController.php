<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Product;
use Session;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $shopcart = Session::get('shopcart', collect());
        $sum = $shopcart->pluck('price')->sum();
        $counts = $shopcart->countBy('id')->toArray();
        $c = $shopcart->unique()->values();
        $shopcart = $shopcart->unique('id')->each(function ($item) use ($counts) {
            $item->count = $counts[$item->id];
        });

        return view('cart',['shopcart' => $shopcart, 'sum' => $sum]);
        
    }
}