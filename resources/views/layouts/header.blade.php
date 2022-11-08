<nav style= "height: 13vh" class="navbar navbar-expand-sm nav " >
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <a class="navbar-brand" id="marca" style="margin-left:50px"  href="/">ESIZON</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" >
      <span class="navbar-toggler-icon"></span>
    </button>
      <form class="d-flex form-inline mx-auto" action="/action_page.php">
        <input  placeholder = "Busqueda" style="width:40vw; border-radius:10px 0px 0px 10px; margin-left:5vw"></input>
        <button class="btn btn-secondary" type="submit" style="border-radius:0px 10px 10px 0px; width:7vw"">Buscar</button>  
      </form>
      <ul class="navbar-nav ms-auto">
        <li class="nav-link"><a class="link""href="#" style="text-decoration:none; color:black">
        <span class="material-icons" style="font-size:1.5rem; margin-right: 5px"> perm_identity </span>Identifícate</a></li>
        <li class="nav-link" ><a class="link"href="cart.show" style="text-decoration:none; color:black"><span class="material-icons"  style="font-size:1.5rem; margin-right:5px; margin-left:10px">shopping_cart</span>Carrito (
        @if(session()->get('cart'))
        {{session()->get('cart')->itotalItems}}
        @else
        0
        @endif
        )
        </a></li>
      </ul>
    </div>  
</nav>