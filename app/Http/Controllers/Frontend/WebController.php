<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function all_products(){
        return view('frontend.pages.all-products');
    }

    public function contact_us(){
        return view('frontend.pages.contact-us');
    }
}
