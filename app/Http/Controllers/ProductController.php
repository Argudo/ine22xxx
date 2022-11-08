<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    static function welcome(){
        $aProduct_offering = Product::offerings();
        $aProduct_new = Product::newProducts();
        return view('welcome', compact('aProduct_offering', 'aProduct_new'));
    }

    function show(Product $product){
        return view('/product/show', compact('product'));
    }

    function addToCart(Product $product, Request $request){
        $cart = $request->session()->get('cart');
        if(!$cart){
            $cart = new Cart;
        }
        $cart->Add($product);
        $request->session()->put('cart', $cart);
        $success = "El producto se ha agregado al carrito"; 
        //dd($cart);
        return view('/product/show', compact('product', 'success'));
    }
}
