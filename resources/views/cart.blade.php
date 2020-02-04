@extends('layouts.head')
@extends('layouts.header')
@include('layouts.slides')
<body>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Nuotrauka</label>
    <label class="product-details">Produktas</label>
    <label class="product-price">Kaina</label>
    <label class="product-quantity">Kiekis</label>
    <label class="product-removal">Ištrinti</label>
    <label class="product-line-price">kaina</label>
  </div>

  @if(isset($shopcart))
<br><br>
@if(count($shopcart))
@foreach ($shopcart as $product)
  <div class="product">
    <div class="product-image">
      <a style="text-decoration:none;" href="{{route('show',['id'=>$product])}}"><img src="{{asset('/images/products/')}}/{{$product->photo}}" width="150px;"></a>
    </div>
    <div class="product-details">
      <div class="product-title">{{$product->group->title}}</div>
      <p class="product-description">{{$product->desc}}</p>
    </div>
    <div class="product-price">{{$product->price}}</div>
    <div class="product-quantity">
      {{$product->count}}
    </div>
    <div class="product-removal">
      {{-- <a style="text-decoration: none;" href="{{route('remove', [$product])}}"><div class="btn"><span>Ištrinti</span></div></a> --}}
      {{-- <span class="remove-product" data-product-id="{{$product->id}}">Ištrinti</span> --}}
      <form action="{{ route('shopcart.destroy', $product) }}" method="post">
        @csrf
        @method('delete')
        <button class="btn" type="submit"><span>Istrinti</span>
        </button>
    </form>
    </div>
    <div class="product-line-price">{{$product->price}}</div>
  </div>
  @endforeach
 <div style="float:right;">Bendra suma: {{$sum}} €</div>
 <a style="text-decoration:none;float:right; margin-top: 20px;" class="btn"  href="{{route('apmokejimas')}}"><span>Pirkti</span></a>
  @else
Krepšelis yra tuščias
@endif
  @endif
</div>
@extends('layouts.footer')
</body>