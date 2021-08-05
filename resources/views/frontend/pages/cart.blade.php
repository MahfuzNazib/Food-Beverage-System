@extends('frontend.layout.web')
@section('content')
<!-- Breadcrumbs-->
<section class="section section-50 breadcrumbs-wrap custom-bg-image novi-background">
    <div class="container text-center">
        <h2>Cart Details</h2>
        <ul class="breadcrumbs-custom">
            <li><a href="{{ route('home') }}">Home</a><span>/</span></li>
            <li><a href="{{ route('all_products') }}">All Products </a><span>/</span></li>
            <li class="active">Cart</li>
        </ul>
    </div>
</section>

<section class="section section-50 novi-background bg-cover">
    <div class="container">
        <div class="product product-single">
            <div class="row">
                <div class="col-sm-8">
                    <h6>Product Details</h6>
                    <table class="table table-sm">
                        <thead>
                            <th>Sl</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Amount</th>
                            <th>Remove</th>
                        </thead>

                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach($cart_data as $cart)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>
                                        <img src="{{ asset('frontend') }}/images/thumbnails/{{$cart['thumbnail']}}" height="100px" width="100px">
                                    </td>
                                    <td>{{ $cart['name'] }}</td>
                                    <td>
                                        <input type="number" class="form-control form-control-sm" value="{{ $cart['quantity'] }}">
                                    </td>
                                    <td>{{ $cart['quantity'] * $cart['price'] }}</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm">X</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-4">
                    <h6>Order Details </h6>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
