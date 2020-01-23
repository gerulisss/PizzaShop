@extends('layouts.head')
@extends('layouts.header')
@include('layouts.slides')
<body>
    <div class="container">
        <main>
            @foreach ($products as $product)
            <div class="card">         
                <a style="text-decoration:none;" href="{{route('show',['id'=>$product])}}"><img src="{{asset('/images/products/')}}/{{$product->photo}}"></a>
                <h3>{{$product->group->title}}</h3> 
                {{-- <h3>{{$product->type->title}}</h3>  --}}
                {{-- <h3>{{$product->priority}}</h3>  --}}
                <p>{{$product->desc}}</p>
                <h3>{{$product->price}} €</h3> 
                    <button class="btn"><span>į krepšelį</span></button>
                </div>
                @endforeach
       </main>
       <br>
       </div>
       @extends('layouts.footer')
    </body>
