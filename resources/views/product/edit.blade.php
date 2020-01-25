@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produkto redagavimas</div>
                <div class="card-body">
                    <div class="form-group">
<form method="POST" action="{{route('product.update',[$product])}}" enctype="multipart/form-data">
    Grupė: <select name="group_id" class="form-control">
        @foreach ($groups as $group)
        <option value="{{$group->id}}" @if($group->id == $product->group_id) selected @endif>{{$group->title}}</option>
        @endforeach
        </select>
        Dydis: <input type="text" name="product_size_title" class="form-control" value="{{$product->size_title}}">
        Kaina: <input type="text" name="product_price" class="form-control" value="{{$product->price}}">
        Nuolaida: <input type="text" name="product_discount" class="form-control" value="{{$product->discount}}">
        Aprasymas: <input type="text" name="product_desc" class="form-control" value="{{$product->desc}}">
        <br>
        Nuotrauka: <input type="file" name="product_photo"> <img src="{{asset('/images/products/')}}/{{$product->photo}}" alt="productphoto" style="width:150px"> 
        <br>
        Prioritetas: <input type="text" name="product_priority" class="form-control" value="{{$product->priority}}">
    @csrf
    <br>
    <button type="submit" class="btn btn-outline-primary">Redaguoti</button>
    <a class="btn btn-outline-success" href="{{route('product.index')}}">Grįžti į produktų sąrašą</a>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection