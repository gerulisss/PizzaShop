@if(isset($shopcart))
<br><br>
@foreach ($shopcart as $product)
    {{$product->group->title}} - Kiekis: {{$product->count}}<br>
@endforeach

@endif 