<form method="POST" action="{{route('type.store')}}">
    Title: <input type="text" name="type_title">
    @csrf
    <button type="submit">Sukurti</button>
 </form>