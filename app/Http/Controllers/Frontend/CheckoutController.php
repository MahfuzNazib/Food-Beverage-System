<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderProducts;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    // Checkout
    public function checkout(Request $request)
    {
        $carts = $request->session()->get('cart');

        // Calculating SubTotal Amount
        $total_amount = 0;
        if ($carts) {
            foreach ($carts as $cart) {
                $total_amount += $cart['quantity'] * $cart['price'];
            }
        }

        return view('frontend.pages.checkout', compact('total_amount'));
    }

    // Place Order
    public function place_order(Request $request)
    {
        $user = auth()->user();

        $cart = $request->session()->get('cart');

        $order = new Order();
        $order->order_id = rand(00000000, 99999999);

        if ($user) {
            $order->customer_id = $user->id;
        } else {
            $order->customer_id = null;
        }

        $order->name = $request->name;
        $order->email = $request->email;
        $order->phone = $request->phone;
        $order->city = $request->city;
        $order->note = $request->note;
        $order->shipping_address = $request->shipping_address;
        $order->amount = $request->amount;
        $order->payble_amount = $request->payble_amount;
        if ($request->type == 'home') {
            $order->shipping_charge = $request->shipping_charge;
        } else {
            $request->outlet_id = $request->outlet_id;
            $request->pickup_time = $request->pickup_time;
        }
        if ($request->paid_by == 'Online') {
            return $this->sslCommerz($request, $order);
        } else {
            return $this->cod_payment($request, $order);
        }

        $order->save();
        $request->session()->forget('cart');

        return redirect()->route('home');

    }

    // Cash on Delivry Payment
    public function cod_payment($request, $order)
    {
        $order->paid_by = "Cash";
        $order->order_status = 'Pending';
        $order->is_active = true;
        $order->payment_status = 'Pending';

        if ($order->save()) {
            $carts = $request->session()->get('cart');
            foreach ($carts as $cart) {
                $order_product = new OrderProducts();
                $order_product->order_id = $order->id;
                $order_product->product_id = $cart['id'];
                $order_product->product_quantity = $cart['quantity'];
                $order_product->unit_price = $cart['price'];
                $order_product->total_amount = $cart['quantity'] * $cart['price'];

                $order_product->save();
            }
        }

        $request->session()->flash('success', 'Thanks for your order.');
    }

    // SSL Commerze Sandbox
    public function sslCommerz($request, $order)
    {
        $order->paid_by = 'Online';
        $order->order_status = 'Pending';
        $order->is_active = true;
        $order->payment_status = 'Pending';

        $total_amount = 0;
        if ($order->save()) {
            $carts = $request->session()->get('cart');
            foreach ($carts as $cart) {
                $order_product = new OrderProducts();
                $order_product->order_id = $order->id;
                $order_product->product_id = $cart['id'];
                $order_product->product_quantity = $cart['quantity'];
                $order_product->unit_price = $cart['price'];
                $order_product->total_amount = $cart['quantity'] * $cart['price'];

                $order_product->save();

                $total_amount += $cart['quantity'] * $cart['price'];
            }
        }

        $post_data = [
            'store_id' => 'zaman60210f4c7d3d8',
            'store_passwd' => 'zaman60210f4c7d3d8@ssl',
            'total_amount' => $total_amount,
            'tran_id' => $order->refresh()->id,
            'currency' => 'BDT',
            'product_category' => 'cart Amount Pay',

            // For Local Development 

            // 'success_url' => 'http://127.0.0.1:8000/sslcommerz/success',
            // 'fail_url' => 'http://127.0.0.1:8000/sslcommerz/failed',
            // 'cancel_url' => 'http://127.0.0.1:8000/sslcommerz/cancel',
            // 'ipn_url' => 'http://127.0.0.1:8000/sslcommerz/ipn',

            // For Server

            'success_url' => 'http://xyzfoo.herokuapp.com/sslcommerz/success',
            'fail_url' => 'http://xyzfoo.herokuapp.com/sslcommerz/failed',
            'cancel_url' => 'http://xyzfoo.herokuapp.com/sslcommerz/cancel',
            'ipn_url' => 'http://xyzfoo.herokuapp.com/sslcommerz/ipn',

            'emi_option' => 0,
            'cus_name' => $order->name,
            'cus_email' => 'testgmail@gmail.com',
            'cus_city' => 'Dhaka',
            'cus_country' => 'Bangladesh',
            'cus_add1' => 'Dhaka',
            'cus_phone' => '01777127618',
            'shipping_method' => 'NO',
            'num_of_item' => 1,
            'product_name' => 'cart Amount Pay',
            'product_profile' => 'non-physical-goods',
            'value_a' => $order->id,
        ];

        // $client = new Client();
        $client = new Client();
        $response = $client->post('https://sandbox.sslcommerz.com/gwprocess/v4/api.php', ['form_params' => $post_data, 'verify' => false])->getBody();

        $order->payment_initiation_server_response = $response->getContents();
        $order->save();

        $a = $order->payment_initiation_server_response;
        $array = json_decode($a, true);
        // return $array['GatewayPageURL'];
        return redirect($array['GatewayPageURL']);
    }

    public function SSLSuccess(Request $request)
    {
        $order = Order::find($request->get('tran_id'));
        $order->payment_validation_server_response = $request->all();
        $order->payment_status = 'Success';
        $order->paid_by = 'Online';
        $order->is_verified = true;

        if ($order->save()):

            $request->session()->flash('success', 'Thanks for your order. Your payment is success.');

            return redirect()->route('home');
        endif;
    }

    public function SSLFailed(Request $request)
    {
        $order = Order::find($request->get('tran_id'));
        $order->payment_validation_server_response = $request->all();
        $order->payment_status = 'Pending';
        $order->paid_by = 'Online';
        $order->is_verified = false;

        if ($order->save()) {
            $request->session()->flash('failed', 'Failed to connect with SSLCOMMERZ');
            return redirect()->route('home');
        }
    }

    public function SSLCancel(Request $request)
    {
        $order = Order::find($request->get('tran_id'));
        $order->payment_validation_server_response = $request->all();
        $order->payment_status = 'Pending';
        $order->paid_by = 'Online';
        $order->is_verified = false;

        if ($order->save()) {
            $request->session()->flash('failed', 'Cancelled to connect with SSLCOMMERZ');

            return redirect()->route('checkout');
        }
    }

    public function SSLIpn(Request $request)
    {
        $order = Order::find($request->get('tran_id'));
        $order->payment_validation_server_response = $request->all();
        $order->is_verified = true;
        $order->save();
    }

}
