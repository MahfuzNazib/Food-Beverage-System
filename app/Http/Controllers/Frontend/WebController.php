<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function all_products(){
        $products = Product::select('id', 'name', 'price', 'thumbnail')->get();
        return view('frontend.pages.all-products', compact('products'));
    }

    public function contact_us(){
        return view('frontend.pages.contact-us');
    }
}
