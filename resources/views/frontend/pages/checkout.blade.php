@extends('frontend.layout.web')
@section('content')
<!-- Breadcrumbs-->
<section class="section section-50 breadcrumbs-wrap custom-bg-image novi-background">
    <div class="container text-center">
        <h2>Cart Details</h2>
        <ul class="breadcrumbs-custom">
            <li><a href="{{ route('home') }}">Home</a><span>/</span></li>
            <li><a href="{{ route('all_products') }}">All Products </a><span>/</span></li>
            <li><a href="{{ route('get-cart') }}">Cart </a><span>/</spanCart</li> <li class="active">Checkout</li>
        </ul>
    </div>
</section>

<section class="section section-50 novi-background bg-cover">
    <div class="container">
        <div class="product product-single">
            <form action="{{ route('place-order') }}" method="post">
                @csrf
            <div class="row">
                <div class="col-sm-8">
                    <h6>Shipping Address</h6>
                    <div class="row">
                        <div class="col-sm-4">
                            <label>Name</label>
                            <input type="text" class="form-control form-control-sm" name="name"
                                value="{{ old('name') }}">
                        </div>

                        <div class="col-sm-4">
                            <label>Email</label>
                            <input type="email" class="form-control form-control-sm" name="email"
                                value="{{ old('email') }}">
                        </div>

                        <div class="col-sm-4">
                            <label>Phone No</label>
                            <input type="text" class="form-control form-control-sm" name="phone"
                                value="{{ old('phone') }}">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label>City</label>
                            <select class="form-control" name="city">
                                <option>Dhaka</option>
                                <option>Rajshahi</option>
                                <option>Chittagong</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label>Note</label>
                            <input type="text" class="form-control" name="note">
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Choose Delivery Type</label>
                            <br>

                            <input type="radio" id="outlet" name="type" value="outlet" class="delivery_type" onchange="radioget($(this).val())" checked>
                            <label for="outlet">From Outlet</label>
                            <br>

                            <input type="radio" id="home" name="type" value="home" class="delivery_type" onchange="radioget($(this).val())">
                            <label for="home">Home Delivery</label>
                           
                        </div>
                        <div class="col-sm-6" id="outlet_list">
                            <label>Select Your Nearest Outlet</label>
                            <select class="form-control" name="outlet_id">
                                <option value="1">Banani</option>
                                <option value="2">Gulshan</option>
                                <option value="3">Badd</option>
                                <option value="4">Uttara</option>
                                <option value="5">Nikuna</option>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <label>Shipping Address</label>
                            <input type="text" class="form-control" name="shipping_address">
                        </div>
                        <div class="col-sm-6" id="outlet_list">
                            <label>Select Payment Method</label>
                            <select class="form-control" name="paid_by">
                                <option value="Cash">Cash on Delivery</option>
                                <option value="Online">Online</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success btn-sm mt-3 float-right">Place Order</button>
                </div>

                <div class="col-sm-4 bg-card">
                    <h6>Order Details </h6>
                    <hr>

                    <table class="table">
                        <tr class="text-bold">
                            <td>Total product</td>
                            <td>4</td>
                        </tr>

                        <tr class="text-bold">
                            <td>Sub Total</td>
                            <td>12344 BDT</td>
                        </tr>

                        <tr class="text-bold">
                            <td>Shipping</td>
                            <td>0.00 BDT</td>
                        </tr>
                    </table>
                    <a href="{{ route('checkout') }}">
                        <button class="btn btn-success">Confirm Order</button>
                    </a>
                </div>
                <!-- Total Sub Total End -->
            </div>
            </form>
        </div>
    </div>
    </div>
</section>
@endsection

<script type="text/javascript">
    $('#outlet_list').hide();
    function radioget(getValue){
        if(getValue == 'outlet'){
            $('#outlet_list').show();
        }else{
            $('#outlet_list').hide();
        }
    }
</script>
