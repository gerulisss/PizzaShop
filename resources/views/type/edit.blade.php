@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tipų redagavimas</div>
                    <div class="card-body">
                <br>
                <form method="POST" action="{{route('type.update',[$type])}}">
                    Pavadinimas: <input type="text" name="type_title" class="form-control"  value="{{$type->title}}">
                    Prioritetas: <input type="text" name="type_priority" class="form-control"  value="{{$type->priority}}">
                    <br>
                    @csrf
                    <button type="submit" class="btn btn-outline-primary">Redaguoti</button>
                    <a class="btn btn-outline-success" href="{{route('type.index')}}">Grįžti į tipų sąrašą</a>
                 </form>
                 <br>

            </div>
        </div>
    </div>
</div>
</div>
@endsection