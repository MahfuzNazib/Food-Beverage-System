@extends('frontend.layout.web')
@section('content')
<!-- Breadcrumbs-->
<section class="section section-50 breadcrumbs-wrap custom-bg-image novi-background">
    <div class="container text-center">
        <h2>Product Details</h2>
        <ul class="breadcrumbs-custom">
            <li><a href="{{ route('home') }}">Home</a><span>/</span></li>
            <li><a href="{{ route('all_products') }}">All Products </a><span>/</span></li>
            <li class="active">{{ $product->name }}</li>
        </ul>
    </div>
</section>

<section class="section section-50 novi-background bg-cover">
    <div class="container">
        <div class="product product-single">
            <div class="row row-50 row-sm-90 text-left justify-content-sm-center">
                <div class="col-md-8 col-lg-6">
                    <div class="product-image">
                        <div class="image">
                            <img class="img-responsive product-image-area" src="{{ asset('frontend/images/thumbnails/'.$product->thumbnail) }}" alt="">
                        </div>

                        <ul class="product-thumbnails">
                            @foreach($product->product_image as $images)
                            <li data-large-image="{{ asset('frontend/images/product_images/'.$images->image) }}">
                            <img class="img-responsive" src="{{ asset('frontend/images/product_images/'.$images->image) }}" alt="" width="84" height="84"></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 text-left offset-md-top-10">
                    <!-- Product Brand-->
                    <p class="product-brand text-italic text-light">{{ $product->category['name'] }}</p>
                    <!-- Product Title-->
                    <h4 class="product-title offset-top-0 font-default text-sbold"><a class="text-content"
                            href="#">{{ $product->name }}</a></h4>
                    <!-- Product Rating-->
                    <div class="product-rating offset-top-20">
                        <span><img class="rating-size" src="{{ asset('frontend/images/icons/rating.png') }}"></span>
                        <span><img class="rating-size" src="{{ asset('frontend/images/icons/rating.png') }}"></span>
                        <span><img class="rating-size" src="{{ asset('frontend/images/icons/rating.png') }}"></span>
                        <span><img class="rating-size" src="{{ asset('frontend/images/icons/rating.png') }}"></span>
                        <span><img class="rating-size" src="{{ asset('frontend/images/icons/rating.png') }}"></span>
                        <span class="product-review-count text-light">4 customer reviews</span>
                    </div>
                    <!-- Responsive-tabs-->
                    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist"
                        aria-multiselectable="false">
                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title"><a id="accordion1-card-head-eaiyedmf" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-axnlxiec" 
                                        aria-controls="accordion1-card-body-axnlxiec" aria-expanded="true"
                                        role="button">
                                        Description
                                        <div class="card-arrow"></div></a>
                                </div>
                            </div>
                            <div class="collapse show" id="accordion1-card-body-axnlxiec"
                                aria-labelledby="accordion1-card-head-eaiyedmf" data-parent="#accordion1"
                                role="tabpanel">
                                <div class="card-body">
                                    {!! $product->short_description !!}
                                </div>
                            </div>
                        </article>
                    </div>

                    <div>
                        <p>Availability : 
                        @if($product->qnty > 10)
                        <span class="text-success">Available </span>
                        @else
                        <span class="text-danger">Out of Stock </span>
                        @endif
                        </p>
                    </div>

                    <div class="product-price offset-top-30"> <span
                            class="product-price-new h5 text-bold text-content">{{ $product->price }} BDT</span><span
                            class="product-price-old h6 text-light text-medium">$80.00</span></div>
                    <div class="offset-top-5">
                        <div class="form-group product-number product-number-mod-1">
                            <label class="text-light">Quantity:</label>
                            <div class="stepper stepper-mod preffix-left-7 postfix-right-20">
                                <input class="form-control input-sm form-control-impressed" type="number"
                                    data-zeros="true" value="1" min="1" max="20">
                            </div>
                        </div>
                        <!-- Product Add To cart-->
                        <button class="btn btn-icon btn-icon-left btn-success" onclick="addToCart({{ $product->id }})">
                            <span> 
                                <img src="{{ 'frontend' }}/images/icons/shopping-cart-w.png" class="icon-size"> 
                            </span>Add to cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
