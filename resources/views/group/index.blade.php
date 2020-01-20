@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Grupių sąrašas
                    <a class="btn btn-outline-primary btn-sm" href="{{route('group.create')}}">Sukurti nauja</a>
                </div>
                <div class="card-body">
                  @foreach ($groups as $group)
                  <form method="POST" action="{{route('group.destroy', [$group])}}">
                    @csrf
                    {{$group->title}}, Prioritetas: {{$group->priority}}
                   <a style="text-decoration:none;" href="{{route('group.edit',[$group])}}"><button type="button" class="btn btn-outline-primary btn-sm">Redaguoti</button></a>
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





