@extends('layouts.head')
@extends('layouts.header')
@include('layouts.slides')
<body>
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
