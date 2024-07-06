<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;
use Inertia\Inertia;
use Inertia\Response;

class CartController extends Controller
{

    public function index(Request $request){
        $cart = Session::get('cart',[]);
        return Inertia::render('Cart/Index',[
            'cartItems' => $cart
        ]);
    }

    public function store(string $id){
        // user_id, product_id, quantity
        // store to cart and make a session too for cart

        $product = Product::find($id);
        $cart = Session::get('cart',[]);
        $cart[] = $product;
        Session::put('cart', $cart);
        
        return redirect(route('cart.index'));
        
    }
}
