<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CratController extends Controller
{
    // Add To Cart Start
    public function add_to_cart($id, $qnty)
    {
        $product = Product::find($id);

        if($product->qnty < 10){
            return response()->json(['unavailable' => 'Product Out of Stock!'], 200);
        }

        if (!$product) {
            abort(404);
        }

        $cart = session()->get('cart');

        // If Cart is Empty then this is the first product
        if (!$cart) {
            $cart = [
                $id => [
                    "id" => $product->id,
                    "name" => $product->name,
                    "quantity" => $qnty,
                    "price" => $product->price,
                    "thumbnail" => $product->thumbnail,
                ],
            ];
            // Put Cart value on session
            session()->put('cart', $cart);
            return response()->json(['success' => 'Product added to cart successfully!'], 200);
        }


        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return response()->json(['success' => 'Product added to cart successfully!'], 200);
        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "id" => $product->id,
            "name" => $product->name,
            "quantity" => $qnty,
            "price" => $product->price,
            "thumbnail" => $product->thumbnail,
        ];
        session()->put('cart', $cart);
        return response()->json(['success' => 'Product added to cart successfully!'], 200);
    }

    // Get Cart 
    public function get_cart(Request $request){
        $cart = $request->session()->get('cart');

        // Total Product Count
        $total_product = count($cart);
        return view('frontend.pages.cart', ['cart_data' => $cart, 'total_product' => $total_product]);
    }

    // Remove Product From Cart
    public function item_remove($id, Request $request){
        session()->forget($id);

        $cart = $request->session()->get('cart');

        return response()->json(['success' => 'Product Removed'],200);
    }
}
