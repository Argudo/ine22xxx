@extends('templates.master')
@section('content-center')
    @foreach(session()->get('cart')->hItem as $item)
        <div class="card card-body product">
            <img class="showImg" src={{$item->product->imgUrl}}></img>
            <h4 class="mt-3">{{$item->product->name}}</h4>
            @if($item->product->hasDiscount())
                <p style="text-decoration:line-through">{{$item->product->price}}€</p>
                <p>{{round($item->product->price - $item->product->price*($item->product->discountPercent/100),2)}}€</p>
            @else
                <p>{{$item->product->price}}€</p>
            @endif
            <p>Cantidad: {{$item->quantity}}</p>
        </div>
@stop