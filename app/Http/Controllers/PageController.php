<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Type;
use App\Product;
use App\Page;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::all();
        $groups = Group::all();
        $products = Product::all();

        return view('welcome',[
            'groups' => $groups, 'products' => $products, 'types' => $types]);

    }

    public function show(Request $request)
    {
      $product = Product::find($request->get('id'));

        return view('show',[
            'product' => $product]);

    }
}