@extends('layouts.app')
@section('messages')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Užsakymų sąrašas
                </div>
                <div class="card-body">
                  @foreach ($orders as $order)
                    ID: {{$order->id}}  būsena: {{$order->status}} užsakymo kaina: {{$order->price}} pristatymo kaina: {{$order->delivery_price}} krepšelio kaina: {{$order->cart_price}} kliento id: {{$order->client_id}}
                  </form>
                  <br>
                @endforeach

            </div>
        </div>
    </div>
</div>
</div>
@endsection