<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Group;
use App\Type;
use Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::all();
        $groups = Group::all();
        $types = Type::all();
        return view('product.index', ['products' => $products,'groups' => $groups, 'types' => $types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups = Group::all();
        $types = Type::all();
        return view('product.create', ['groups' => $groups, 'types' => $types]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    //     $validator = Validator::make($request->all(),
    //     [
    //    'product_size_title' => ['required', 'min:3', 'max:64']
    //     ],
    //     [
    //        'product_size_title.required' => 'Prasome uzpildyti title laukeli'
    //     ]
        
    //    );
    //    if ($validator->fails()) {
    //    $request->flash();
    //    return redirect()->route('product.create')->withErrors($validator);
       
    //    }
        $product = new Product;
        $file = $request->file('product_photo');

        $file_name = $file->getClientOriginalName();


   
      //Move Uploaded File
      $destinationPath = public_path(). '/images/products';

      $file->move($destinationPath,$file->getClientOriginalName());

        $product->size_title = $request->product_size_title;
        $product->desc = $request->product_desc;
        $product->price = $request->product_price;
        // $product->discount = $request->product_discount;
        $product->photo = $file_name;
        $product->priority = $request->product_priority;
        $product->desc = $request->product_desc;
        $product->type_id = $request->type_id;
        $product->group_id = $request->group_id;
        $product->save();
        return redirect()->route('product.index')->with('success_message', 'Sėkmingai sukurtas.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $groups = Group::all();
        $types = Type::all();
        return view('product.edit', ['product' => $product, 'groups' => $groups, 'types' => $types]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->size_title = $request->product_size_title;
        $product->desc = $request->product_desc;
        $product->price = $request->product_price;
        $product->discount = $request->product_discount;
        $product->photo = $request->product_photo;
        $product->priority = $request->product_priority;
        $product->desc = $request->product_desc;
        $product->type_id = $request->type_id;
        $product->group_id = $request->group_id;
        $product->save();
        return redirect()->route('product.index')->with('success_message', 'Sėkmingai atnaujintas.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('success_message', 'Sėkmingai ištrintas.');
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}
