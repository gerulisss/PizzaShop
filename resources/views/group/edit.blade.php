@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Grupių redagavimas</div>
                    <div class="card-body">
                <br>
                <form method="POST" action="{{route('group.update',[$group])}}">
                    Pavadinimas: <input type="text" name="group_title" class="form-control"  value="{{$group->title}}">
                    Prioritetas: <input type="text" name="group_priority" class="form-control"  value="{{$group->priority}}">
                    Tipas: <select name="type_id" class="form-control">
                        @foreach ($types as $type)
                        <option value="{{$type->id}}"  @if($type->id == $group->type_id) selected @endif>{{$type->title}}</option>
                        @endforeach
                        </select>
                    <br>
                    @csrf
                    <button type="submit" class="btn btn-outline-primary">Redaguoti</button>
                    <a class="btn btn-outline-success" href="{{route('group.index')}}">Grįžti į grupių sąrašą</a>
                 </form>
                 <br>

            </div>
        </div>
    </div>
</div>
</div>
@endsection