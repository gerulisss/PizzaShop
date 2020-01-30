@if(isset($shopcart))
@if(count($shopcart))
<br><br>
@foreach ($shopcart as $product)
    {{$product->group->title}} - Kiekis: {{$product->count}}<br>
@endforeach
@else 
Krepselis yra tuscias
@endif
@endif 