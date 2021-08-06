<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(can('orders')){
            $orders = Order::orderBy('id', 'desc')->get();
            return view('backend.modules.order_management.order_list', compact('orders'));
        }else{
            return view('errors.404');
        }
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function order_details($id){
        $order_details = Order::with('order_products')->find($id);
        return view('backend.modules.order_management.order_details', compact('order_details'));
    }
}
