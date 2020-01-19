<form method="POST" action="{{route('type.store')}}">
    Title: <input type="text" name="type_title">
    Priority: <input type="text" name="type_priority">
    @csrf
    <button type="submit">Sukurti</button>
 </form>