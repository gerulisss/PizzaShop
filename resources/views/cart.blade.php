@extends('layouts.head')
@extends('layouts.header')
@include('layouts.slides')
<body>

<div class="shopping-cart">

  <div class="column-labels">
    <label class="product-image">Image</label>
    <label class="product-details">Product</label>
    <label class="product-price">Price</label>
    <label class="product-quantity">Quantity</label>
    <label class="product-removal">Remove</label>
    <label class="product-line-price">Total</label>
  </div>

  @if(isset($shopcart))
<br><br>
@foreach ($shopcart as $product)
  <div class="product">
    <div class="product-image">
        <a href="#"><img src="{{asset('/images/products/')}}/{{$product->photo}}" width="150px;"></a>
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
      <a style="text-decoration: none;" href="{{route('remove', [$product])}}"><div class="btn"><span>Ištrinti</span></div></a>
    </div>
    <div class="product-line-price">{{$product->price}}</div>
  </div>

  @endforeach
  @endif
</div>
@extends('layouts.footer')
</body>