@extends('templates.master')
@section('content-center')
    @foreach(session()->get('cart')->hItem as $item)
    <div style="margin: 20px; width:50vw;" class="card card-body productCart">
        <div class="row">
            <img class="showImg col-sm-5" src={{$item['imgUrl']}}></img>
            <div class="col-sm-5">
                <h4 class="mt-3">{{$item['name']}}</h4>
                @if($item['discountPercent'] > 0)
                    <p style="text-decoration:line-through">{{$item['price']}}€</p>
                    <p>{{round($item['price'] - $item['price']*($item['discountPercent']/100),2)}}€</p>
                @else
                    <p>{{$item['price']}}€</p>
                @endif
            </div>
            <div class="col-sm-4">
                <p>Cantidad: {{$item['quantity']}}</p>
                <a href="{{ route('cart.operate', [ 'operation' => 'remove', 'product' => \App\Models\Product::find($item['id'])]) }}" class="btn btn-danger">-</a>
                <a href="{{ route('cart.operate', [ 'operation' => 'add', 'product' => \App\Models\Product::find($item['id'])]) }}" class="btn btn-success">+</a>
            </div>
        </div>
    </div>
    @endforeach
    <div style="margin:20px;">
        <p>Productos totales: {{session()->get('cart')->itotalItems}}</p>
        <p>Precio total: {{session()->get('cart')->dTotalPrice}} €</p>
        <a href=" {{ route('cart.operate', [ 'operation' => 'removeAll', 'product' => \App\Models\Product::find($item['id'])]) }}" class="btn btn-danger">Vaciar carrito</a>
    </div>
@stop