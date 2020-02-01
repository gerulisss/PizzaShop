<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Paysera;
use Session;
use App\Order;
use App\Client;
use App\OrderProduct;

class PayseraController extends Controller
{
    public function index()
    {
        return view('paysera');
    }

    public function test() // mokejimo puslapis
    {
        
        $shopcart = Session::get('shopcart', collect());

        $sum = $shopcart->pluck('price')->sum();
        
        
        
        return view('paysera.form', ['sum' => $sum]);
    }



    public function pay(Request $request, Paysera $paysera)
    {

            
            $client = new Client;
            $client->name = 'Yes';
            $client->phone = '123';	
            $client->address = 'No';	
            $client->comment = 'Np';
            $client->delivery = 1;	
            $client->pickup_id = rand(1,5);
    
            $client->save();
    
            $order = new Order;
    
            $order->status = 0;
            $order->price	= $request->amount;
            $order->delivery_price	= 0;
            $order->cart_price	= $request->amount;
            $order->client_id = $client->id;
    
            $order->save();
    
            $shopcart = Session::get('cart', collect());
    
            foreach($shopcart as $product) {
                $orderProduct = new OrderProduct;
                $orderProduct->product_id = $product->id;
                $orderProduct->order_id = $order->id;
                $orderProduct->save();
            }

            $paysera->pay($request->email, $request->amount*100, $request->order); //Laravel lūžimas

    }

    public function cancel()
    {
        return view('paysera.cancel');
    }



    public function accept(Paysera $paysera)
    {
        $info = $paysera->getPayment();
        return redirect()->route('ok');
    }


    public function callback(Paysera $paysera)
    {
        $info = $paysera->getPayment();
        return 'OK';
    }


    public function ok()
    {
        return view('paysera.ok');
    }

}
