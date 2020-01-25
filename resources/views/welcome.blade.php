@extends('layouts.head')
@extends('layouts.header')
@include('layouts.slides')
<body>
    <div class="container">
        @foreach ($types as $type)
            <h2 style="text-align: center;">{{$type->title}}</h2>
            <br>
        <main>
                @foreach ($type->groups as $group)
                @foreach ($group->products as $product)
                <div class="card">         
                    <a style="text-decoration:none;" href="{{route('show',['id'=>$product])}}"><img src="{{asset('/images/products/')}}/{{$product->photo}}"></a>
                    <h3>{{$product->group->title}}</h3> 
                    <p>{{$product->desc}}</p>
                    <h3>{{$product->price}} €</h3> 
                        <button class="btn"><span>į krepšelį</span></button>
                    </div>
                    
                @endforeach
                    
                @endforeach
            </main>
            @endforeach
    </div>
       @extends('layouts.footer')
    </body>
