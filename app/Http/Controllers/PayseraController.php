<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Paysera;

class PayseraController extends Controller
{
    public function test()
    {
        return view('paysera.form');
    }



    public function pay(Request $request, Paysera $paysera)
    {

        $paysera->pay($request->email, $request->amount); //Laravel lūžimas

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
