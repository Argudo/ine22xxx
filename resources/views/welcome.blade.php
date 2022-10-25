@extends('templates.master')
@section('content-center')
    <!-- SECTION: Entries -->   
    <div class="row">
      <h2 class="col-sm-4 mt-5" style="margin: 0px 0px 0px 100px; background-color: #EEEEEE; padding: 15px; border-radius:10px">OFERTAS DEL DIA</h2>
      <div id= "listaProducto" class="list-group list-group-horizontal ">
        @foreach($aProduct_offering as $producto)
          <div class ="col-sm-2 card card-body producto">
            <img src={{$producto->imgUrl}}></img> <!-- fakeimg is defined in the <style> tag, at the beginning -->
            <h4 class= "mt-3">{{$producto->name}}</h4>
            <p style="text-decoration:line-through">{{$producto->price}}€</p>
            <p>{{round($producto->price - $producto->price*($producto->discountPercent/100),2)}}€</p>
          </div>
        @endforeach
      </div>
    </div>
    <div class="row">
    <h2 class="col-sm-4 mt-5" style="margin: 0px 0px 0px 100px; background-color: #EEEEEE; padding: 15px; border-radius:10px">NUEVOS PRODUCTOS</h2>
      <div id= "listaProducto" class="list-group list-group-horizontal mb-5">
      @foreach($aProduct_new as $producto)
          <div class ="col-sm-2 card card-body producto">
            <img src={{$producto->imgUrl}}></img> <!-- fakeimg is defined in the <style> tag, at the beginning -->
            <h4 class= "mt-3">{{$producto->name}}</h4>
            @if($producto->hasDiscount())
              <p style="text-decoration:line-through">{{$producto->price}}€</p>
              <p>{{round($producto->price - $producto->price*($producto->discountPercent/100),2)}}€</p>
            @else
             <p>{{$producto->price}}€</p>
            @endif
          </div>
        @endforeach
@stop
@section('content-right')
    <!-- SECTION: Cards -->
    <h4 class="mb-4 text-center mt-3">TOP VENTAS</h4>
    <!-- Style are directly included in the style attribute just for illustrative reasons. -->
    <!-- However, including them in <style> or in a CSS file is a better practice. -->
    <ol class="p-0">
      <li class="card card-body fw-bold mb-3">1- Cascos Otaku</li>
      <li class="card card-body fw-bold mb-3">2 - Teclado</li>
      <li class="card card-body fw-bold mb-3">3 - Tarjeta Gráfica 4090</li>
    </ol>
@stop