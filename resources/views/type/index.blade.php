@foreach ($types as $type)
  <a href="{{route('type.edit',[$type])}}">{{$type->title}} {{$type->priority}}</a>
  <form method="POST" action="{{route('type.destroy', [$type])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach