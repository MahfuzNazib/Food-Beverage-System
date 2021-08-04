@extends('frontend.layout.web')
@section('content')
<!-- Breadcrumbs-->
<section class="section section-50 breadcrumbs-wrap custom-bg-image novi-background">
    <div class="container text-center">
        <h2>All Products</h2>
        <ul class="breadcrumbs-custom">
            <li><a href="{{ route('home') }}">Home</a><span>/</span></li>
            <li><a href="{{ route('all_products') }}">All Products </a><span>/</span></li>
            <li class="active">Single Product Details </li>
        </ul>
    </div>
</section>

<section class="section section-50 novi-background bg-cover">
    <div class="container">
        <div class="product product-single">
            <div class="row row-50 row-sm-90 text-left justify-content-sm-center">
                <div class="col-md-8 col-lg-6">
                    <div class="product-image">
                        <div class="image"><img class="img-responsive product-image-area"
                                src="images/single-product-01-443x365.png" alt=""></div>
                        <ul class="product-thumbnails">
                            <li class="active" data-large-image="images/single-product-01-443x365.png"><img
                                    class="img-responsive" src="images/single-product-01-78x62.png" alt="" width="84"
                                    height="84"></li>
                            <li data-large-image="images/single-product-02-443x365.png"><img class="img-responsive"
                                    src="images/single-product-02-78x62.png" alt="" width="84" height="84"></li>
                            <li data-large-image="images/single-product-03-309x236.png"><img class="img-responsive"
                                    src="images/single-product-03-78x62.png" alt="" width="84" height="84"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 text-left offset-md-top-10">
                    <!-- Product Brand-->
                    <p class="product-brand text-italic text-light">Organic Farm</p>
                    <!-- Product Title-->
                    <h4 class="product-title offset-top-0 font-default text-sbold"><a class="text-content"
                            href="#">Bananas</a></h4>
                    <!-- Product Rating-->
                    <div class="product-rating offset-top-20"><span
                            class="mdi novi-icon mdi-star icon-xs-small"></span><span
                            class="mdi novi-icon mdi-star icon-xs-small"></span><span
                            class="mdi novi-icon mdi-star icon-xs-small"></span><span
                            class="mdi novi-icon mdi-star-half icon-xs-small"></span><span
                            class="mdi novi-icon mdi-star-outline icon-xs-small"></span><span
                            class="product-review-count text-light">4 customer reviews</span></div>
                    <!-- Responsive-tabs-->
                    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist"
                        aria-multiselectable="false">
                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title"><a id="accordion1-card-head-eaiyedmf" data-toggle="collapse"
                                        data-parent="#accordion1" href="#accordion1-card-body-axnlxiec"
                                        aria-controls="accordion1-card-body-axnlxiec" aria-expanded="true"
                                        role="button">Description
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="collapse show" id="accordion1-card-body-axnlxiec"
                                aria-labelledby="accordion1-card-head-eaiyedmf" data-parent="#accordion1"
                                role="tabpanel">
                                <div class="card-body">
                                    <p>Bananas are one of the most popular fruits, due to their sweet taste and
                                        high nutrient content. They are an excellent source of vitamin B6 and
                                        fiber.</p>
                                </div>
                            </div>
                        </article>
                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title"><a class="collapsed" id="accordion1-card-head-etqdyhbi"
                                        data-toggle="collapse" data-parent="#accordion1"
                                        href="#accordion1-card-body-hckquppi"
                                        aria-controls="accordion1-card-body-hckquppi" aria-expanded="false"
                                        role="button">Delivery &amp; Returns
                                        <div class="card-arrow"></div></a></div>
                            </div>
                            <div class="collapse" id="accordion1-card-body-hckquppi"
                                aria-labelledby="accordion1-card-head-etqdyhbi" data-parent="#accordion1"
                                role="tabpanel">
                                <div class="card-body">
                                    <p>We deliver our goods worldwide. No matter where you live, your order will
                                        be shipped in time and delivered right to your door or to any other
                                        location you have stated. The packages are handled with utmost care, so
                                        the ordered products will be handed to you safe and sound, just like you
                                        expect them to be.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="product-price offset-top-30"> <span
                            class="product-price-new h5 text-bold text-content">$34.00</span><span
                            class="product-price-old h6 text-light text-medium">$80.00</span></div>
                    <div class="offset-top-5">
                        <div class="form-group product-number product-number-mod-1">
                            <label class="text-light">Quantity:</label>
                            <div class="stepper stepper-mod preffix-left-7 postfix-right-20">
                                <input class="form-control input-sm form-control-impressed" type="number"
                                    data-zeros="true" value="1" min="1" max="20">
                            </div>
                        </div>
                        <!-- Product Add To cart--><a class="btn btn-primary btn-icon btn-icon-left btn-sm btn-sm-small"
                            href="shop-cart.html" style="position: relative; top: 1px;"><span
                                class="icon fl-outicons-shopping-cart13 icon-xs-big"></span>Add to cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
