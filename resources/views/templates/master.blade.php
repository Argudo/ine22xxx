<!doctype html>
<!-- Bootstrap first template for Internet y Negocio Electrónico, University of Cadiz,
     since 2019, based on https://www.w3schools.com/bootstrap4/bootstrap_templates.asp -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">      
    <link rel="stylesheet" href="/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Chakra+Petch:wght@500&family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <!-- 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> 
    -->
    <style>
      .fakeimg { height: 100px; background: #aaa; }
      .nav { background:rgba(110,123,251,1); }
      .producto { height: min-content; text-align: right;}
      .productoCart { width:min-content; margin:50px; height: min-content; text-align: right;}
      .producto img { width: 100%; height: 277px; object-fit: contain; border-bottom: 2px solid lightgray; padding-bottom: 10px;}
      .showImg {width:20vh; height:20vh;}
      #listaProducto {gap : 50px; padding: 30px 100px; }
      .sideBar { background-color: #EEEEEE; }
      #marca{ font-size: 3rem; font-weight: 700; }
      .material-icons{ display: inline-flex; vertical-align: top; }
      #main{ min-height: 80% !important; }
    </style>

    <title>My INE project</title>
  </head>
  <body>
    @include('layouts.header')
    
    <!-- LAYOUT: CENTER -->
    <div id="main" class="container-fluid">
          <div class="row">
            <div class="col-sm-10"> <!-- col-sm-7 means seven out of twelve columns -->
                @yield('content-center')
            </div>
        </div>
    </div>
     <!-- BLOCK: RIGHT -->
    <div class="col-sm-2 sidenav sideBar"> <!-- col-sm-2 means two out of twelve columns -->
        @yield('content-right')
    </div>

    @include('layouts.footer')

    <!-- Loading Javascripts -->   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"')</script>
    <!-- <script src="../../assets/js/vendor/popper.min.js"></script> -->
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>