@extends('templates.master')
@section('content-center')
    <!-- SECTION: Entries -->   
    <div class="row">
      <h2 class="col-sm-4 mt-5" style="margin: 0px 0px 0px 100px; background-color: #EEEEEE; padding: 15px; border-radius:10px">OFERTAS DEL DIA</h2>
      <div id= "listaProducto" class="list-group list-group-horizontal ">
        
        <div class ="col-sm-2 card card-body producto">
          <img src="img/cascos.webp" ></img> <!-- fakeimg is defined in the <style> tag, at the beginning -->
          <h4 class= "mt-3">Cascos Otaku</h4>
          <p>19,99€</p>
        </div>

        <div class ="col-sm-2 card card-body producto">
          <img src="img/teclado.jfif"></img> <!-- fakeimg is defined in the <style> tag, at the beginning -->
          <h4 class= "mt-3">Teclado</h4>
          <p>19,99€</p>
        </div>

        <div class ="col-sm-2 card card-body producto">
          <img src="img/grafica.png" ></img> <!-- fakeimg is defined in the <style> tag, at the beginning -->
          <h4 class= "mt-3">Tarjeta Gráfica 4090</h4>
          <p>1999,99€</p>
        </div>
        
      </div>
    </div>
    <div class="row">
    <h2 class="col-sm-4 mt-5" style="margin: 0px 0px 0px 100px; background-color: #EEEEEE; padding: 15px; border-radius:10px">NUEVOS PRODUCTOS</h2>
      <div id= "listaProducto" class="list-group list-group-horizontal mb-5">

      <div class ="col-sm-2 card card-body producto">
        <img src="img/cascos.webp"></img> <!-- fakeimg is defined in the <style> tag, at the beginning -->
        <h4 class= "mt-3">Cascos Otaku</h4>
        <p>19,99€</p>
      </div>
        
      <div class ="col-sm-2 card card-body producto">
        <img src="img/teclado.jfif"></img> <!-- fakeimg is defined in the <style> tag, at the beginning -->
        <h4 class= "mt-3">Teclado</h4>
        <p>19,99€</p>
      </div>

      <div class ="col-sm-2 card card-body producto">
        <img src="img/grafica.png" ></img> <!-- fakeimg is defined in the <style> tag, at the beginning -->
        <h4 class= "mt-3">Tarjeta Gráfica 4090</h4>
        <p>1999,99€</p>
      </div>
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