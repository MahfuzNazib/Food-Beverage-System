<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    // Home Page
    public function home()
    {
        $categories = Category::orderBy('position', 'asc')->get();
        $featured_products = Product::select('id', 'slug', 'name', 'thumbnail', 'price')->where('is_featured', 1)->get();
        return view('frontend.pages.home', compact('categories', 'featured_products'));
    }

    // All Product
    public function all_products(){
        $products = Product::select('id', 'name', 'slug', 'price', 'thumbnail')->get();
        $categories = Category::select('id', 'name', 'slug')->get();
        $brands = Brand::select('id', 'name', 'slug')->get();

        return view('frontend.pages.all-products', compact('products', 'categories', 'brands'));
    }

    // Single Product 
    public function single_product($slug){

        $product = Product::with('category', 'product_image')->where('slug', $slug)->first();
        return view('frontend.pages.single-product', compact('product'));
    }
    // Contact Page
    public function contact_us(){
        return view('frontend.pages.contact-us');
    }
}
