<?php

namespace App\Http\Controllers;

//use App\Models\Cart;
//use App\Models\product;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // $cartItems = product::all();
        // dd($cartItems);
        return view('layout\cart', compact('cartItems'));
    }
    public function addToCart(Request $req){
        \Cart::session(auth()->id())->add([
            'id' => $req->id,
            'name' => $req->name,
            'price' => $req->price,
            'description' => $req->description,
            'quantity' => $req->quantity,
            'gallery' => $req->gallery,
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }
    
}
