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
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>UnitPrice</th>
                            <th>Amount</th>
                            <th>Remove</th>
                        </thead>

                        <tbody>
                            @if(!empty($cart_data))
                            <?php 
                                $sub_total = 0;
                            ?>
                            @foreach($cart_data as $cart)
                                <tr>
                                    <td>
                                        <img src="{{ asset('frontend') }}/images/thumbnails/{{$cart['thumbnail']}}" height="100px" width="auto">
                                    </td>
                                    <td class="align-middle">{{ $cart['name'] }}</td>
                                    <td class="align-middle">
                                        <input type="number" class="form-control form-control-sm" value="{{ $cart['quantity'] }}">
                                    </td>
                                    <td class="align-middle">{{ $cart['price'] }}</td>
                                    <td class="align-middle">{{ $cart['quantity'] * $cart['price'] }}</td>
                                    <td class="align-middle">
                                        <button class="btn btn-danger btn-sm" onclick="itemRemove({{ $cart['id'] }})">X</button>
                                    </td>
                                    <!-- Calculating Total Sub total -->
                                    <?php 
                                        $sub_total += $cart['quantity'] * $cart['price'];
                                    ?>
                                </tr>
                            @endforeach

                            @else
                            <tr>
                                <td colspan="6">
                                    <center>
                                        <span class="badge badge-danger">No Product Found</span>
                                    </center>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="col-sm-4 bg-card">
                    <h6>Order Details </h6>
                    <hr>
                    @if(!empty($cart_data))
                        <table class="table">
                            <tr class="text-bold">
                                <td>Total product</td>
                                <td>{{ $total_product }}</td>
                            </tr>

                            <tr class="text-bold">
                                <td>Sub Total</td>
                                <td>{{ $sub_total }} BDT</td>
                            </tr>
                        </table>
                            <button class="btn btn-success">Confirm Order</button>
                        </div>
                        <!-- Total Sub Total End -->

                    @else
                    <span class="badge badge-danger">
                        No Order Details
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
