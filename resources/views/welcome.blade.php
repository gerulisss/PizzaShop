<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PizzaShop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <!-- Styles -->
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    </head>
    @extends('layouts.header')
    @include('layouts.slides')
    <div class="container">
        <main>
            @foreach ($products as $product)
            <div class="card">         
                <img src="{{asset('/images/products/')}}/{{$product->photo}}">
                <h3>{{$product->group->title}}</h3> 
                <h3>{{$product->type->title}}</h3> 
                <h3>{{$product->priority}}</h3> 
                <h3>{{$product->price}}</h3> 
                    <p>{{$product->desc}}</p>
                    <button class="btn"><span>į krepšelį</span></button>
                </div>
                @endforeach
       </main>
       </div>
       @extends('layouts.footer')
    </body>
    <script src="{{ asset('/js/carousel.js') }}" defer></script>
    <script src="{{ asset('/js/sidenav.js') }}" defer></script>
</html>
