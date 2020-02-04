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
                <h2>{{$product->group->title}}</h2>
                <h2>{{$product->price}} €</h2>
                <h4>{{$product->desc}}</h4>
                <a style="text-decoration: none;" href="{{route('add', [$product])}}"><div class="btn" style="width: 150px; float: left;"><span>Į krepšelį</span></div></a>
            </div>
            @if(session()->has('success_message'))
            <div class="alert alert-success" role="alert">
                {{session()->get('success_message')}}
            </div>
            @endif
          </div>
          </div>
          </div>
        </div>
            
  @extends('layouts.footer')
