<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
}
