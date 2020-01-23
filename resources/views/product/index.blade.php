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
           <th>Grupė</th>
           <th>Pavadinimas</th>
           <th>Dydis</th>
           <th>Kaina</th>
           <th>Nuolaida</th>
           <th>Aprašymas</th>
           <th>Prioritetas</th>
           <th>Sukurta</th>
           <th>Redaguoti</th>
        </tr>
     </thead>
     <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{$product->type->title}}</td>
          <td>{{$product->group->title}}</td>
          <td>{{ $product->size_title }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ $product->discount }}</td>
          <td>{{ $product->desc}}</td>
          <td>{{ $product->priority }}</td>
          <td>{{$product->created_at}}</td>
          {{-- <td>{{$product->type->id}}</td> --}}
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
@endsection

{{-- <div class="container">
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
                                    <td>{{ $product->priority }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{$product->group->title}}</td>
                                    <td> <h6>Sukurta:</h6> {{$product->created_at}}</td>
                   <a style="text-decoration:none;" href="{{route('product.edit',[$product])}}"><button type="button" class="btn btn-outline-primary btn-sm">Redaguoti</button></a>
                   <button type="submit" class="btn btn-outline-danger btn-sm">Ištrinti</button>
                  </form>
                  <br>
                @endforeach

            </div>
        </div>
    </div>
</div>
</div> --}}