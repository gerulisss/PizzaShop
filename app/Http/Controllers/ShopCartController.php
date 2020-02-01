<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;
use App\Group;
use Response;
use View;

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

        return redirect()->back()->with('success_message', 'Produktas idėtas į krepšelį!');
    }

    //Viska istrina is sesijos
    // public function remove(Product $product)
    // {

    //     $shopcart = Session::get('shopcart', null);

    //     if ($shopcart === null) {
    //         $shopcart = collect(); 
    //     }

    //     Session::forget('shopcart', $shopcart);

    //     return redirect()->back();
    // }

    public function getCart()
    {
        $groups = Group::all();

        $shopcart = Session::get('shopcart', collect());

        $counts = $shopcart->countBy('id')->toArray();

        $shopcart = $shopcart->unique('id')->each(function ($item) use ($counts) {
            $item->count = $counts[$item->id];
        });

        $html = View::make('top_cart')->with(['shopcart' => $shopcart])->render();

        return Response::json([
            'html' => $html,

        ], 
        200);



    }

    public function removeCart(Request $request)
    {
        $groups = Group::all();

        $shopcart = Session::get('shopcart', collect());


        $shopcart = $shopcart->where('id', '!=', $request->id);

        Session::put('shopcart', $shopcart);


        $counts = $shopcart->countBy('id')->toArray();

        $shopcart = $shopcart->unique('id')->each(function ($item) use ($counts) {
            $item->count = $counts[$item->id];
        });

        $html = View::make('top_cart')->with(['shopcart' => $shopcart])->render();

        return Response::json([
            'html' => $html,

        ], 
        200);
    


    }

}
