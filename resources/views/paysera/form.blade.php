<!DOCTYPE html>
<html>
<body>

<h2>Paysera Mokėjimas</h2>

<form action="{{route('pay')}}" method="POST">
  Paštas:<br>
  <input type="email" name="email">
  <br>
  Pinigų kiekis:<br>
  <input type="text" name="amount">
  <br><br>
  <input type="submit" value="Mokėti">
  @csrf
</form> 


</body>
</html>