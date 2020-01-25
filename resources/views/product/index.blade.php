@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
  <h2>Produktų sąrašas</h2>
  <a class="btn btn-outline-primary btn-sm" href="{{route('product.create')}}">Sukurti nauja</a>
  <br>
  <br>
  <table class="table table-bordered" id="laravel">
     <thead>
        <tr>
           <th>ID</th>
           <th>Dydis</th>
           <th>Aprašymas</th>
           <th>Kaina</th>
           <th>Nuolaida</th>
           <th>Nuotrauka</th>
           <th>Prioritetas</th>
           <th>Grupė</th>
           <th>Sukurtas</th>
           <th>Atnaujintas</th>
           <th></th>
        </tr>
     </thead>
     <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{ $product->size_title }}</td>
          <td>{{ $product->desc}}</td>
          <td>{{ $product->price}}</td>
          <td>{{ $product->discount}}</td>
          <td>{{$product->photo}}</td>
          <td>{{$product->priority}}</td>
          <td>{{$product->group->id}}</td>
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
{{-- {{ $products->links() }} --}}
@endsection
