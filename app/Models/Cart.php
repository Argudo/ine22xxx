<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public $hItem;
    public $itotalItems = 0;
    public $dTotalPrice = 0;

    function __construct(Cart $cart = null){
        if($cart){
            $this->hItem = $cart->hItem;
            $this->itotalItems = $cart->itotalItems;
            $this->dTotalPrice = $cart->dTotalPrice;
        }else{
            $this->hItem = [];
        }
    }

    public function Add(Product $producto){
        if(array_key_exists($producto->id, $this->hItem))
            $this->hItem[$producto->id]['quantity']++;
        else{
            $this->hItem[$producto->id]['quantity'] = 1;
            $this->hItem[$producto->id]['price'] = $producto->price;
            $this->hItem[$producto->id]['discountPercent'] = $producto->discountPercent;
            $this->hItem[$producto->id]['name'] = $producto->name;
            $this->hItem[$producto->id]['imgUrl'] = $producto->imgUrl;
            $this->hItem[$producto->id]['id'] = $producto->id;
        }
        $this->itotalItems++;
        $this->dTotalPrice += $producto->price;
    }

    public function Remove(Product $producto){
        if(array_key_exists($producto->id, $this->hItem)){
            if($this->hItem[$producto->id]['quantity'] > 0){
                $this->hItem[$producto->id]['quantity']--;
                $this->itotalItems--;
                $this->dTotalPrice -= $producto->price;
            }
        }
    }

    public function RemoveAll(Product $product){
        if(array_key_exists($product->id, $this->hItem)){
            $this->itotalItems -= $this->hItem[$product->id]['quantity'];
            $this->dTotalPrice -= $this->hItem[$product->id]['quantity'] * $product->price;
            unset($this->hItem[$product->id]);
        }
    }
}
