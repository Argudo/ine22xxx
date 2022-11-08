<?php

namespace Tests\Unit;
Use Tests\TestCase;
Use App\Models\Cart;
Use App\Models\Product;

use function PHPUnit\Framework\assertTrue;

//use PHPUnit\Framework\TestCase;

class CartTest extends TestCase
{
    public static $cart;
    public static function InitializeCart(){
        self::$cart = new Cart;
        $product = Product::first();
        self::$cart->Add($product);
        self::$cart->Add($product);
        self::$cart->Add($product);
    }

    public function testConstructor(){
        $cart = new Cart;
        $this->assertTrue(count($cart->hItem) == 0); 
        $this->assertTrue($cart->itotalItems == 0);
        $this->assertTrue($cart->dTotalPrice == 0);
    }

    public function testAdd(){
        self::InitializeCart();
        $cart = self::$cart;
        $product = Product::first();
        $cart->Add($product);
        $this->assertTrue($cart->hItem[$product->id]['quantity'] == 4); 
        $this->assertTrue($cart->itotalItems == 4);
        $this->assertTrue($cart->dTotalPrice == $product->price * 4);
    }

    public function testRemove(){
        self::InitializeCart();
        $cart = self::$cart;
        $product = Product::first();
        $cart->Remove($product);
        $this->assertTrue($cart->hItem[$product->id]['quantity'] == 2); 
        $this->assertTrue($cart->itotalItems == 2);
        $this->assertTrue(Abs($cart->dTotalPrice - $product->price * 2) < 0.001);
    }

    public function testRemoveAll(){
        self::InitializeCart();
        $cart = self::$cart;
        $product = Product::first();
        $cart->RemoveAll($product);
        $this->assertTrue(!array_key_exists($product->id, $cart->hItem)); 
        $this->assertTrue($cart->itotalItems == 0);
        $this->assertTrue($cart->dTotalPrice == 0);
    }
}
