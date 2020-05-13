<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Orders;
use Illuminate\Http\Request;
use App\Products;
use Session;

class ProductsController extends CommonController
{
    public function products()
    {
        $products = Products::all();
        return view('product',compact('products'));
    }

    public function getAddToCart(Request $request, $id)
    {
        $products = Products::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($products, $products->id);
        Session::put('cart', $cart);
        return redirect('index');
    }

    public function cart()
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        return view('cart',[
            'books'=> $cart->items,
            'totalPrice'=> $cart->totalPrice,
            'totalQty'=>$cart->totalQty]);
    }

    public function increaseByOne($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->increaseByOne($id);
        session()->put('cart', $cart);
        return redirect()->action('ProductsController@cart');
    }

    public function decreaseByOne($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->decreaseByOne($id);
        session()->put('cart', $cart);
        return redirect()->action('ProductsController@cart');
    }

    public function removeItem($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->removeItem($id);
        session()->put('cart', $cart);
        return redirect()->action('ProductsController@cart');
    }

    public function clearCart()
    {
        if(session()->has('cart')){
            session()->forget('cart');
        }
        return redirect()->action('ProductsController@products');
    }
    
    public function single()
    {
        return view('single');
    }

    public function checkout()
    {
        return view('checkout');
    }
}
