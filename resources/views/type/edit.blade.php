<form method="POST" action="{{route('type.update',[$type])}}">
    Title: <input type="text" name="type_title" value="{{$type->title}}">
    @csrf
    <button type="submit">EDIT</button>
 </form>