<!DOCTYPE html>
<html>
<body>

<h2>Paysera Mokėjimas</h2>

<form action="{{route('pay')}}" method="POST">
  Paštas:<br>
  <input type="email" name="email">
  <br>
  <br>
  Pinigų kiekis: <input style="border:none; outline:none; width:45px;" type="text" name="amount" value={{$sum}} readonly>
  <br><br>
  <input type="submit" value="Mokėti">
  @csrf
</form> 


</body>
</html>