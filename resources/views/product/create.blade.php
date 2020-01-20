@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produkto sukūrimas</div>
                <div class="card-body">
                    <div class="form-group">
 
<form method="POST" action="{{route('product.store')}}">
    <br>
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
        Dydis: <input type="text" name="product_size_title" class="form-control">
        Kaina: <input type="text" name="product_price" class="form-control">
        Nuolaida: <input type="text" name="product_discount" class="form-control">
        Aprasymas: <input type="text" name="product_desc" class="form-control">
        Nuotrauka: <input type="text" name="product_photo" class="form-control">
        Prioritetas: <input type="text" name="product_priority" class="form-control">
    <br>
    @csrf
    <button type="submit" class="btn btn-outline-primary">Sukurti</button>
    <a class="btn btn-outline-success" href="{{route('product.index')}}">Grįžti į grupių sąrašą</a>
 </form>
</div>
 @endsection
</div>
</div>
</div>
</div>
</div>

{{-- <td>{{ $products->size_title }}</td>
<td>{{ $products->desc}}</td>
<td>{{ $products->price }}</td>
<td>{{ $products->discount }}</td>
<td>{{ $products->photo }}</td>
<td>{{ $products->priority }}</td>
<td>{{ $products->price }}</td> --}}