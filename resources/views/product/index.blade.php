@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-12">
          <div class="card">
              <div class="card-header">Produktų sąrašas
                      <a class="btn btn-outline-primary btn-sm" href="{{ route('product.create') }}"> Create New Product</a>
                  </div>

                  <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th>ID</th>
                        <th>Dydis</th>
                        <th>Aprašymas</th>
                        <th>Kaina</th>
                        <th>Nuolaida</th>
                        <th>Nuotrauka</th>
                        <th>Prioritetas</th>
                        <th>Grupė</th>
                        <th>Tipas</th>
                        <th>Sukurtas</th>
                        <th>Atnaujintas</th>
                        <th width="240px"></th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($products as $product)
                      <tr>
                        <td>{{$product->id}}</td>
                        <td>{{ $product->size_title }}</td>
                        <td>{!! \Illuminate\Support\Str::words($product->desc, 3,'....')  !!}</td>
                        <td>{{ $product->price}}</td>
                        <td>{{ $product->discount}}</td>
                        <td>{{$product->photo}}</td>
                        <td>{{$product->priority}}</td>
                        <td>{{$product->group->id}}</td>
                        <td>{{$product->group->type->id}}</td>
                        <td>{{$product->created_at}}</td>
                        <td>{{$product->updated_at}}</td>
                        <td>
                        <form method="POST" action="{{route('product.destroy', [$product])}}">
                          <a style="text-decoration:none;" href="{{route('product.edit',[$product])}}"><button type="button" class="btn btn-outline-primary btn-sm">Redaguoti</button></a>
                          @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm">Ištrinti</button>
                      </form>
                    </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <br>
                {!! $products->links() !!}
          </div>
      </div>
  </div>
 @endsection
