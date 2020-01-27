<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;

class ShopCartController extends Controller
{
    public function add(Product $product)
    {
        $shopcart = Session::get('shopcart', null);

        if ($shopcart === null) {
            $shopcart = collect(); 
        }

        $shopcart->add($product);

        Session::put('shopcart', $shopcart);

        return redirect()->back();
    }
}
