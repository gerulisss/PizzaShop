{{-- <img src="{{asset('/images/products/')}}/{{$product->photo}}"> --}}

@extends('layouts.head')
@extends('layouts.header')
@include('layouts.slides')

 
<div id="wrap">
    <div id="product_layout_1">
      <div class="top">
      <div class="product_images">
            <img src="{{asset('/images/products/')}}/{{$product->photo}}" style="width:350px;">
        </div>
        </div>
        <div class="product_info">
            <div class="product_description">
                <h1>{{$product->group->title}}</h1>
                <h2>{{$product->price}} €</h2>
                <h4>{{$product->desc}}</h4>
          <div class="btn" style="width: 200px; float:right"><span>Į krepšelį</span></div>
          </div>
          </div>
          </div>
          </div>
        </div>
             
            
  @extends('layouts.footer')