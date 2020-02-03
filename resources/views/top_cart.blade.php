@if(isset($shopcart))
@if(count($shopcart))
<br><br>
@foreach ($shopcart as $product)
<span class="remove-product" data-product-id="{{$product->id}}">Delete</span> {{$product->group->title}} - Kiekis: {{$product->count}}<br>
@endforeach
Bendra suma: {{$sum}} €
@else 
Krepšelis yra tuščias
@endif 
@endif