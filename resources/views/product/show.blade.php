@extends('templates.master')
@section('content-center')
<div class ="card card-body product">
  <img class ="showImg" src=/{{$product->imgUrl}}></img> 
  <h4 class= "mt-3">{{$product->name}}</h4>
  <p>{{$product->Company->name}}</p>
  <p>{{$product->description}}</p>
  @if($product->hasDiscount())
  <p style="text-decoration:line-through">{{$product->price}}€</p>
    <p>{{round($product->price - $product->price*($product->discountPercent/100),2)}}€</p>
  @else
    <p>{{$product->price}}€</p>
  @endif
  <a href="{{route('cart.add', $product->id)}}" class="btn btn-primary">Añadir al carrito</a>
</div>
@stop