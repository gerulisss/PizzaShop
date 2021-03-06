@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tipų sąrašas
                    <a class="btn btn-outline-primary btn-sm" href="{{route('type.create')}}">Sukurti nauja</a>
                </div>
                <div class="card-body">
                  @foreach ($types as $type)
                  <form method="POST" action="{{route('type.destroy', [$type])}}">
                    @csrf
                    {{$type->title}}, Prioritetas: {{$type->priority}}
                   <a style="text-decoration:none;" href="{{route('type.edit',[$type])}}"><button type="button" class="btn btn-outline-primary btn-sm">Redaguoti</button></a>
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