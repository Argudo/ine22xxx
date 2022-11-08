<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    function Show(){
        return view('cart.show', ['cart' => session('cart')]);
    }
}
