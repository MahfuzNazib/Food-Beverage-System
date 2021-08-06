@extends('backend.layouts.app')

@section('content')
@include('backend.layouts.headers.cards')

{{-- Page Header Start --}}
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('order.index') }}">
                                    Order List </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Order List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Page Header End --}}

<!-- Main Content Start -->
<div class="container-fluid mt--6">
    <div class="row justify-content-center">
        <div class=" col ">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">Order Details of, <span
                            class="badge badge-info">{{ $order_details->order_id }}</span></h3>
                    
                    <!-- Print Button -->
                    <button class="btn btn-info btn-sm float-right">Print Invoice</button>
                </div>
                <div class="card-body">

                    <!-- Order Summary -->
                    <div class="row">
                        <div class="col-sm-6 bg card">
                            <table width="100%">
                                <tr>
                                    <td width="60%">Order ID</td>
                                    <td>: {{ $order_details->order_id }}</td>
                                </tr>
                                <tr>
                                    <td>Order Status</td>
                                    <td>: {{ $order_details->order_status }}</td>
                                </tr>
                                <tr>
                                    <td>Payment Status</td>
                                    <td>: {{ $order_details->payment_status }}</td>
                                </tr>
                            </table>
                        </div>

                        <div class="col-sm-6 bg card">
                            <table width="100%">
                                <tr>
                                    <td width="50%">CustomerName</td>
                                    <td>: {{ $order_details->name }}</td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>: {{ $order_details->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>: {{ $order_details->email }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Product Details -->
                    <div class="row mt-4">
                        <h3 class="ml-3">Product Details</h3>
                        <div class="col-sm-12">
                            <table class="table table-bordered table-sm">
                                <thead>
                                    <th>Sl No.</th>
                                    <th>Product Name</th>
                                    <th>Unit Price</th>
                                    <th>Quantity</th>
                                    <th>Total Amount</th>
                                </thead>

                                <tbody>
                                    @foreach($order_details->order_products as $product)
                                    <tr>
                                        <td>01</td>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->unit_price }}</td>
                                        <td>{{ $product->product_quantity }}</td>
                                        <td>{{ $product->total_amount }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Order Calculation -->
                    <div class="row mt-4">
                        <div class="col-sm-8">
                            <label>Shipping Address</label><br>
                            <p>{{ $order_details->shipping_address }}</p>
                        </div>

                        <div class="col-sm-4">
                            <table width="100%">
                                <tr>
                                    <td>Sub Total</td>
                                    <td> : {{ $order_details->amount }}/=</td>
                                </tr>
                                <tr>
                                    <td>Shipping Charge</td>
                                    <td> : 
                                        @if($order_details->shipping_charge)
                                        {{ $order_details->shipping_charge }}/=
                                        @else
                                        0.00/=
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Discount</td>
                                    <td> : 
                                        @if($order_details->discount)
                                        {{ $order_details->discount }}/=
                                        @else
                                        0.00/=
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Payble Amount</td>
                                    <td> : {{ $order_details->payble_amount }}/=</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Content End -->

@endsection
