@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Produktų sąrašas
                    <a class="btn btn-outline-primary btn-sm" href="{{route('product.create')}}">Sukurti nauja</a>
                </div>
                <div class="card-body">
                  
                  @foreach ($products as $product)
                  <form method="POST" action="{{route('product.destroy', [$product])}}">
                    @csrf
                      <td>{{ $product->size_title }}</td>
                                    <td>{{ $product->desc}}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->discount }}</td>
                                    <td>{{ $product->photo }}</td>
                                    <td>{{ $product->priority }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{$product->group->title}}</td>
                   <a style="text-decoration:none;" href="{{route('product.edit',[$product])}}"><button type="button" class="btn btn-outline-primary btn-sm">Redaguoti</button></a>
                   <button type="submit" class="btn btn-outline-danger btn-sm">Ištrinti</button>
                  </form>
                  <br>
                @endforeach

            </div>
        </div>
    </div>
</div>
</div>
@endsection