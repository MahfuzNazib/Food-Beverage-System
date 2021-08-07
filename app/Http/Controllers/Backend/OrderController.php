<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProducts;
use Illuminate\Http\Request;
use PDF;

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
        $order_products = OrderProducts::with('product')->where('order_id', $id)->get();
        return view('backend.modules.order_management.order_details', compact('order_details', 'order_products'));
    }

    // Print Order Invoice
    public function print_invoice($id){
        $pdf_style = '<style>
            *{
                font-size:15px;
            }
            table,td, th {
                border: 1px solid black;
                border-collapse: collapse;
                width:100%;
            }
        </style>';
        $title = 'Invoice';
        $order_details = Order::with('order_products')->find($id);
        $order_products = OrderProducts::with('product')->where('order_id', $id)->get();
        $pdf = PDF::loadView('backend.modules.order_management.print_invoice',compact('order_details','order_products','pdf_style','title'));
        $pdf->setPaper('A4', 'potrait');
        $name = "Invoice".$order_details->order_id.".pdf";
        return $pdf->stream($name, array("Attachment" => false));
    }
}
