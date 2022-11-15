<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    function Show(){
        return view('cart.show', ['cart' => session('cart')]);
    }

    function add(Product $product){
        $cart = session('cart');
        $cart->add($product);
        session(['cart' => $cart]);
        return redirect()->route('cart.show');
    }

    function remove(Product $product){
        $cart = session('cart');
        $cart->remove($product);
        session(['cart' => $cart]);
        return redirect()->route('cart.show');
    }

    function removeAll(){
        session(['cart' => new Cart()]);
        return redirect()->route('cart.show');
    }

    function operate(String $sOperation, Product $product){
        switch($sOperation){
            case 'add':
                return $this->add($product);
            case 'remove':
                return $this->remove($product);
            case 'removeAll':
                return $this->removeAll();
            default:
                return redirect()->route('cart.show');
        }
    }

}
