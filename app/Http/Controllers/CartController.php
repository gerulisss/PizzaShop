<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
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

        // return view('cart');
        
        $shopcart = Session::get('shopcart', collect());
        
        $counts = $shopcart->countBy('id')->toArray();
        $c = $shopcart->unique()->values();
        $shopcart = $shopcart->unique('id')->each(function ($item) use ($counts) {
            $item->count = $counts[$item->id];
        });
        
        return view('cart',['shopcart' => $shopcart]);
        
    }
}