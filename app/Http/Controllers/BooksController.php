<?php

namespace App\Http\Controllers;

use App\Books;
use App\Cart;

use Illuminate\Http\Request;
use Session;
class BooksController extends Controller
{
    public function index()
    {
        $books = Books::all();
        return view('index', compact(['books']));
    }

    public function getAddToCart(Request $request, $id)
    {
        $book = Books::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($book, $book->id);
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
        return redirect()->action('BooksController@cart');
    }

    public function decreaseByOne($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->decreaseByOne($id);
        session()->put('cart', $cart);
        return redirect()->action('BooksController@cart');
    }

    public function removeItem($id)
    {
        $cart = new Cart(Session::get('cart'));
        $cart->removeItem($id);
        session()->put('cart', $cart);
        return redirect()->action('BooksController@cart');
    }

    public function clearCart()
    {
        if(session()->has('cart')){
            session()->forget('cart');
        }
        return redirect()->action('BooksController@index');
    }
}
