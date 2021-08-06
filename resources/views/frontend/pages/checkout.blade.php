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
                            <div class="col-sm-4">
                                <label>Choose Delivery Type</label>
                                <br>

                                <input type="radio" id="outlet" name="type" value="outlet" class="delivery_type"
                                    onchange="radioget($(this).val())" checked>
                                <label for="outlet">From Outlet</label>
                                <br>

                                <input type="radio" id="home" name="type" value="home" class="delivery_type"
                                    onchange="radioget($(this).val())">
                                <label for="home">Home Delivery</label>

                            </div>

                            <div class="col-sm-4" id="outlet_list">
                                <label>Select Your Nearest Outlet</label>
                                <select class="form-control" name="outlet_id">
                                    <option value="null" selected disabled>Select Outlet</option>
                                    <option value="Banani">Banani</option>
                                    <option value="Gulshan">Gulshan</option>
                                    <option value="Badda">Badda</option>
                                    <option value="Uttara">Uttara</option>
                                    <option value="Nikunja">Nikunja</option>
                                </select>
                            </div>

                            <div class="col-sm-4" id="pickup_time">
                                <label>Select Time</label>
                                <select class="form-control" name="pickup_time">
                                    <option value="null" selected disabled>Select Time</option>
                                    <option>11.00 AM</option>
                                    <option>12.00 PM</option>
                                    <option>01.00 PM</option>
                                    <option>02.00 PM</option>
                                    <option>03.00 PM</option>
                                    <option>04.00 PM</option>
                                    <option>05.00 PM</option>
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
                                <td>Total Amount</td>
                                <td class="float-right">{{ $total_amount }} BDT</td>
                                <input type="hidden" name="amount" id="total_amount" value="{{ $total_amount }}">
                            </tr>

                            <tr class="text-bold">
                                <td>Shipping</td>
                                <td class="float-right"><span id="shipping">0.00</span> BDT</td>
                                <input type="hidden" name="shipping_charge" id="shipping_charge">
                            </tr>

                            <tr class="text-bold">
                                <td>Total Payble</td>
                                <td class="float-right"><span id="payble">{{ $total_amount }}</span> BDT</td>
                                <input type="hidden" name="payble_amount" id="payble_amount">
                            </tr>

                        </table>
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
    function radioget(getValue) {
        var total_amount = $('input#total_amount').val();
        // If Select Shipping Charge then add 60 tk extra. it will be dynamic next version :) 
        var shipping_charge = 60;
        var payble_amount = 0;

        if (getValue == 'outlet') {
            payble_amount = total_amount;
            shipping_charge = 0;

            // Put Shipping Charge & Payble Value in two fields
            $('#shipping').html(shipping_charge);
            $('#shipping_charge').val(shipping_charge);

            $('#payble').html(payble_amount);
            $('#payble_amount').val(payble_amount);

            swal("", "60 Taka Removed", "success");

            $('#outlet_list').show();
            $('#pickup_time').show();
        } else {
            payble_amount = parseInt(total_amount) + parseInt(shipping_charge);
            // Put Shipping Charge & Payble Value in two fields
            $('#shipping').html(shipping_charge);
            $('#shipping_charge').val(shipping_charge);

            $('#payble').html(payble_amount);
            $('#payble_amount').val(payble_amount);

            swal("", shipping_charge + " Taka added as Shipping Charge", "success");

            $('#outlet_list').hide();
            $('#pickup_time').hide();
        }
    }

</script>
