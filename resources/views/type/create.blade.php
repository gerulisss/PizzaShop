@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tipų sukūrimas</div>
                <div class="card-body">
                    <div class="form-group">
 
<form method="POST" action="{{route('type.store')}}">
    <br>
    Pavadinimas: <input type="text" name="type_title" class="form-control">
    Prioritetas: <input type="text" name="type_priority" class="form-control">
    <br>
    @csrf
    <button type="submit" class="btn btn-outline-primary">Sukurti</button>
    <a class="btn btn-outline-success" href="{{route('type.index')}}">Grįžti į tipų sąrašą</a>
 </form>
</div>
 @endsection
</div>
</div>
</div>
</div>
</div>