@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produkto sukūrimas</div>
                <div class="card-body">
                    <div class="form-group">
<form method="POST" action="{{route('product.update',[$product])}}">
    Grupe: <select name="group_id" class="form-control">
        @foreach ($groups as $group)
        <option value="{{$group->id}}">{{$group->title}}</option>
        @endforeach
        </select>
        Tipa: <select name="type_id" class="form-control">
            @foreach ($types as $type)
            <option value="{{$type->id}}">{{$type->title}}</option>
            @endforeach
            </select>
        Dydis: <input type="text" name="product_size_title" class="form-control" value="{{$product->size_title}}">
        Kaina: <input type="text" name="product_price" class="form-control" value="{{$product->price}}">
        Nuolaida: <input type="text" name="product_discount" class="form-control" value="{{$product->discount}}">
        Aprasymas: <input type="text" name="product_desc" class="form-control" value="{{$product->desc}}">
        Nuotrauka: <input type="text" name="product_photo" class="form-control" value="{{$product->photo}}">
        Prioritetas: <input type="text" name="product_priority" class="form-control" value="{{$product->priority}}">
    @csrf
    <br>
    <button type="submit" class="btn btn-outline-primary">EDIT</button>
</form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection