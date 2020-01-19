<form method="POST" action="{{route('type.update',[$type])}}">
    Title: <input type="text" name="type_title" value="{{$type->title}}">
    Priority: <input type="text" name="type_priority" value="{{$type->priority}}">
    @csrf
    <button type="submit">EDIT</button>
 </form>