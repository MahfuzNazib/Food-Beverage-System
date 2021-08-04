@extends('frontend.layout.web')
@section('content')
 
<section class="section">
    <div class="swiper-container swiper-slider swiper-custom" data-height="35.10416666666667%" data-min-height="375px"
        data-index-bullet="false" data-slide-effect="fade" data-autoplay="5000">
        <div class="swiper-wrapper swiper-wrapper-custom">
            <div class="swiper-slide" data-slide-bg="{{ 'frontend' }}/images/slide-01.jpg">
                <div class="swiper-slide-caption">
                    <div class="container text-center">
                        <div class="row justify-content-center">
                            <div class="col-md-9 col-lg-8 top">
                                <h1>Fresh Organic Food</h1>
                                <p class="h6 text-regular" data-wow-delay=".95s">We enable people to enjoy
                                    locally grown eco-friendly and healthy<br class="veil reveal-lg-block">
                                    foods that are reasonably priced and conveniently delivered.</p>
                                <div class="offset-top-30 offset-lg-top-60"><a class="btn btn-primary"
                                        href="shop-list-view.html">shop now</a><a class="btn btn-white btn-transparent"
                                        href="#">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide" data-slide-bg="{{ 'frontend' }}/images/slide-02.jpg">
                <div class="swiper-slide-caption">
                    <div class="container text-center">
                        <div class="row justify-content-center">
                            <div class="col-md-9 col-lg-8 top">
                                <h1>Fresh Organic Food</h1>
                                <p class="h6 text-regular">We enable people to enjoy locally grown eco-friendly
                                    and healthy<br class="veil reveal-lg-block"> foods that are reasonably
                                    priced and conveniently delivered.</p>
                                <div class="offset-top-30 offset-lg-top-60"><a class="btn btn-primary"
                                        href="shop-list-view.html">shop now</a><a class="btn btn-white btn-transparent"
                                        href="#">Learn More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Swiper Pagination-->
            <div class="swiper-pagination"></div>
            <!-- Swiper Navigation-->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</section>

<!-- Popular Categories-->
<section class="section-50 section-lg-115">
    <div class="container">
        <h3 class="heading-3 text-center">Popular Categories</h3>
        <div class="row">
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-mod" data-dots="true" data-nav="false" data-items="1"
                data-autoplay="false" data-sm-items="2" data-lg-items="3" data-stage-padding="15" data-loop="false"
                data-margin="30">
                <!-- Categories Start -->
                @foreach($categories as $category)
                <div class="item">
                    <div class="product-categories"><a
                            class="product-categories-block product-categories-block-variant-1"
                            href="shop-list-view.html">
                            <div class="product-categories-content">
                                <h4>{{ $category->name }}</h4><span>14 products</span>
                            </div>
                        </a>
                        <div class="product-categories-image"><img class="img-responsive"
                                src="{{ 'frontend' }}/images/categories/{{ $category->image }}" alt="" width="362" height="219" />
                        </div>
                    </div>
                </div>
                @endforeach 
                <!-- Categories End -->
            </div>
        </div>
    </div>
</section>


<!-- Offer of The Day-->
<section class="section-50 section-lg-115 section-lg-bottom-95">
    <div class="container">
        <h3 class="heading-3 text-center">Offer of The Day</h3>
        <div class="row range-lg justify-content-sm-center">
            <div class="col-md-8 col-lg-6 text-center">
                <p>We offer all sorts of vegetables, fruits, grass fed organic meat and more, fresh from our
                    farm, delivered free to your door. Everything we grow and sell is organic.</p>
            </div>
        </div>
        <div class="row text-center text-xl-left">
            <div class="col-12">
                <div class="unit product unit-lg unit-lg-horizontal unit-spacing-lg">
                    <div class="unit-left">
                        <div class="product-image"><img class="img-responsive"
                                src="{{ 'frontend' }}/images/home-05-526x404.png" alt="" width="526" height="404" />
                        </div>
                    </div>
                    <div class="unit-body">
                        <div class="product-content">
                            <div class="product-title">
                                <h6 class="offset-top-10"><a class="text-content" href="shop-single-products.html">
                                        Organic Seasonal Veg Box</a></h6>
                            </div>
                            <div class="product-price"><span
                                    class="product-price-new h5 text-sbold text-success">$95.00</span><span
                                    class="product-price-old h6 text-light text-sbold">$180.00</span></div>
                            <div class="product-info">
                                <dl>
                                    <dt class="text-bold">Category:</dt>
                                    <dd><a href="#">Package</a></dd>
                                </dl>
                                <dl>
                                    <dt class="text-bold">Tags:</dt>
                                    <dd><a href="#">Vegetables,</a><a href="#">Fruits,</a><a href="#">Box</a>
                                    </dd>
                                </dl>
                            </div>
                            <div class="product-time">
                                <!-- Countdown-->
                                <div class="countdown countdown-1" data-countdown="data-countdown" data-to="2019-12-31">
                                    <div class="countdown-block countdown-block-days">
                                        <svg class="countdown-circle" x="0" y="0" width="200" height="200"
                                            viewbox="0 0 200 200" data-progress-days="">
                                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90">
                                            </circle>
                                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90">
                                            </circle>
                                        </svg>
                                        <div class="countdown-wrap">
                                            <div class="countdown-counter" data-counter-days="">00</div>
                                            <div class="countdown-title">days</div>
                                        </div>
                                    </div>
                                    <div class="countdown-block countdown-block-hours">
                                        <svg class="countdown-circle" x="0" y="0" width="200" height="200"
                                            viewbox="0 0 200 200" data-progress-hours="">
                                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90">
                                            </circle>
                                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90">
                                            </circle>
                                        </svg>
                                        <div class="countdown-wrap">
                                            <div class="countdown-counter" data-counter-hours="">00</div>
                                            <div class="countdown-title">hours</div>
                                        </div>
                                    </div>
                                    <div class="countdown-block countdown-block-minutes">
                                        <svg class="countdown-circle" x="0" y="0" width="200" height="200"
                                            viewbox="0 0 200 200" data-progress-minutes="">
                                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90">
                                            </circle>
                                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90">
                                            </circle>
                                        </svg>
                                        <div class="countdown-wrap">
                                            <div class="countdown-counter" data-counter-minutes="">00</div>
                                            <div class="countdown-title">minutes</div>
                                        </div>
                                    </div>
                                    <div class="countdown-block countdown-block-seconds">
                                        <svg class="countdown-circle" x="0" y="0" width="200" height="200"
                                            viewbox="0 0 200 200" data-progress-seconds="">
                                            <circle class="countdown-circle-bg" cx="100" cy="100" r="90">
                                            </circle>
                                            <circle class="countdown-circle-fg clipped" cx="100" cy="100" r="90">
                                            </circle>
                                        </svg>
                                        <div class="countdown-wrap">
                                            <div class="countdown-counter" data-counter-seconds="">00</div>
                                            <div class="countdown-title">seconds</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-foot">
                                <div class="btn btn-icon btn-icon-left btn-primary"><span> <img
                                            src="{{ 'frontend' }}/images/icons/shopping-cart-w.png" class="icon-size">
                                    </span>Add
                                    to cart</div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products-->
<section class="section-50 section-lg-115 section-lg-bottom-85">
    <div class="container">
        <h3 class="heading-3 text-center">Featured Products</h3>
        <div class="tabs-custom tabs-horizontal tabs-corporate tabs-horizontal-minimal" id="tabs-1">
            <!--Nav tabs-->
            <ul class="nav nav-tabs">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1"
                        data-toggle="tab">Fruits</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2"
                        data-toggle="tab">Vegetables</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3"
                        data-toggle="tab">Bread</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-4" data-toggle="tab">Meat</a>
                </li>
            </ul>
            <!--Tab panes-->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tabs-1-1">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-custom" data-items="1" data-md-items="2" data-lg-items="4"
                        data-stage-padding="15" data-dots-each="1" data-loop="true" data-dots="true" data-margin="30"
                        data-autoplay="false">
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-06-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>

                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="single-products.html">Bananas</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$34.00</span><span
                                        class="product-price-old h7 text-light text-regular">$80.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span> <img
                                                src="{{ 'frontend' }}/images/icons/shopping-cart-w.png"
                                                class="icon-size"> </span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-07-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Kiwis</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$74.00</span><span
                                        class="product-price-old h7 text-light text-regular">$90.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-08-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Strawberries</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$90.00</span><span
                                        class="product-price-old h7 text-light text-regular">$120.00</span>
                                </div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-09-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Pineapples</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$60.00</span><span
                                        class="product-price-old h7 text-light text-regular">$90.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-2">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-custom" data-items="1" data-md-items="2" data-lg-items="4"
                        data-stage-padding="15" data-dots-each="1" data-loop="true" data-dots="true" data-margin="30"
                        data-autoplay="false">
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-15-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Pepper</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$34.00</span><span
                                        class="product-price-old h7 text-light text-regular">$80.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-16-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Tomatoes</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$74.00</span><span
                                        class="product-price-old h7 text-light text-regular">$90.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-17-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Potatoes</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$90.00</span><span
                                        class="product-price-old h7 text-light text-regular">$120.00</span>
                                </div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-18-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Aubergine</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$60.00</span><span
                                        class="product-price-old h7 text-light text-regular">$90.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-3">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-custom" data-items="1" data-md-items="2" data-lg-items="4"
                        data-stage-padding="15" data-dots-each="1" data-loop="true" data-dots="true" data-margin="30"
                        data-autoplay="false">
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-19-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Cookies</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$34.00</span><span
                                        class="product-price-old h7 text-light text-regular">$80.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-20-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Egg bread</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">74.00</span><span
                                        class="product-price-old h7 text-light text-regular">$90.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-21-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Yeast bread</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$90.00</span><span
                                        class="product-price-old h7 text-light text-regular">$120.00</span>
                                </div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-22-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Vegan Bread </a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$60.00</span><span
                                        class="product-price-old h7 text-light text-regular">$90.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-4">
                    <!-- Owl Carousel-->
                    <div class="owl-carousel owl-carousel-custom" data-items="1" data-md-items="2" data-lg-items="4"
                        data-stage-padding="15" data-dots-each="1" data-loop="true" data-dots="true" data-margin="30"
                        data-autoplay="false">
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-23-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Pork chops</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$34.00</span><span
                                        class="product-price-old h7 text-light text-regular">$80.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-24-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Beef fillet</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$74.00</span><span
                                        class="product-price-old h7 text-light text-regular">$90.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-25-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Beef steaks</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$90.00</span><span
                                        class="product-price-old h7 text-light text-regular">120.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="product-featured text-center">
                                <div class="product-featured-images"><img class="img-responsive"
                                        src="{{ 'frontend' }}/images/home-26-270x204.png" alt="" width="270"
                                        height="204" />
                                </div>
                                <div class="product-featured-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                        class="icon material-icons-star_half icon-saffron icon-xs-small"></span>
                                </div>
                                <div class="product-featured-title">
                                    <div class="h7 text-sbold"><a class="text-chateau-green"
                                            href="shop-single-products.html">Pork bacon</a></div>
                                </div>
                                <div class="product-featured-price"><span
                                        class="product-price-new h6 text-sbold">$60.00</span><span
                                        class="product-price-old h7 text-light text-regular">$90.00</span></div>
                                <div class="product-featured-block-hover"><a
                                        class="btn btn-icon btn-icon-left btn-success" href="shop-cart.html"><span
                                            class="icon fl-outicons-shopping-cart13"></span>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banners-->
<section class="section section-44 bg-primary novi-background bg-cover">
    <div class="container">
        <div class="row row-30 text-center align-items-lg-center justify-content-sm-center">
            <div class="col-sm-6 col-md-4 col-xl-2"><a class="banner" href="#"><img class="img-responsive"
                        src="{{ 'frontend' }}/images/home-10-129x110.png" alt="" width="129" height="110" /></a></div>
            <div class="col-sm-6 col-md-4 col-xl-2"><a class="banner" href="#"><img class="img-responsive"
                        src="{{ 'frontend' }}/images/home-11-120x114.png" alt="" width="120" height="114" /></a></div>
            <div class="col-sm-6 col-md-4 col-xl-2"><a class="banner" href="#"><img class="img-responsive"
                        src="{{ 'frontend' }}/images/home-12-105x105.png" alt="" width="105" height="105" /></a></div>
            <div class="col-sm-6 col-md-4 col-xl-2"><a class="banner" href="#"><img class="img-responsive"
                        src="{{ 'frontend' }}/images/home-13-126x113.png" alt="" width="126" height="113" /></a></div>
            <div class="col-sm-6 col-md-4 col-xl-2"><a class="banner" href="#"><img class="img-responsive"
                        src="{{ 'frontend' }}/images/home-14-126x96.png" alt="" width="126" height="96" /></a></div>
            <div class="col-sm-6 col-md-4 col-xl-2"><a class="banner" href="#"><img class="img-responsive"
                        src="{{ 'frontend' }}/images/home-14-108x106.png" alt="" width="108" height="106" /></a></div>
        </div>
    </div>
</section>

<!-- What People Say-->
<section class="section-50 section-lg-115 bg-whisper section-lg-bottom-95">
    <div class="container">
        <h3 class="heading-3 text-center">What People Say</h3>
        <div class="row justify-content-lg-center offset-top-40">
            <div class="col-xl-8">
                <!-- Slick Carousel-->
                <div class="slick-slider-custom text-center">
                    <div class="slick-slider carousel-parent" data-arrows="true" data-loop="true" data-dots="false"
                        data-swipe="true" data-items="1" data-xs-items="1" data-lg-items="3" data-sm-items="1"
                        data-md-items="1" data-child="#child-carousel" data-for="#child-carousel"
                        data-center-mode="true" data-slide-to-scroll="1">
                        <div class="item"><img src="{{ 'frontend' }}/images/slick-1.jpg" alt="" width="116"
                                height="116"></div>
                        <div class="item"><img src="{{ 'frontend' }}/images/slick-2.jpg" alt="" width="116"
                                height="116"></div>
                        <div class="item"><img src="{{ 'frontend' }}/images/slick-3.jpg" alt="" width="116"
                                height="116"></div>
                        <div class="item"><img src="{{ 'frontend' }}/images/slick-4.jpg" alt="" width="116"
                                height="116"></div>
                    </div>
                    <div class="slick-slider" id="child-carousel" data-for=".carousel-parent" data-arrows="false"
                        data-loop="true" data-dots="false" data-swipe="false" data-items="1" data-xs-items="1"
                        data-sm-items="1" data-md-items="1" data-lg-items="1" data-slide-to-scroll="1">
                        <div class="item">
                            <blockquote class="quote-custom">
                                <div class="quote-custom-title">
                                    <h6>I’m recommending you to all my colleagues.</h6>
                                </div>
                                <div class="quote-custom-q">
                                    <q>I’ve been using Organic Farm delivery service for a few weeks &amp; I’d
                                        like to recommend them for their excellent reliable service and the
                                        quality of their produce. Since starting to use this service I get
                                        better quality food that’s organised in such a small amount of time I
                                        used to spend.</q>
                                </div>
                                <div class="quote-custom-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span></div>
                                <div class="quote-custom-cite text-bold">
                                    <cite>Philip Moore</cite>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote-custom">
                                <div class="quote-custom-title">
                                    <h6>Perfect supplier of organic food and ingredients.</h6>
                                </div>
                                <div class="quote-custom-q">
                                    <q>I have been always looking for a reliable organic food supplier due to my
                                        restaurant’s constant need in high-quality vegetables and fruits. I am
                                        really glad I discovered your farm! It’s great that your farm’s products
                                        are incredible tasty, full of useful vitamins and minerals and free of
                                        pesticides and nitrates.</q>
                                </div>
                                <div class="quote-custom-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span></div>
                                <div class="quote-custom-cite text-bold">
                                    <cite>Julia Smith</cite>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote-custom">
                                <div class="quote-custom-title">
                                    <h6>At this farm, you can get all kinds of organic food.</h6>
                                </div>
                                <div class="quote-custom-q">
                                    <q>As a person who has a healthy lifestyle, I’m very concerned about what I
                                        eat and drink every day. Your farm is one of a few organic food
                                        providers in our area which I fully trust. I appreciate what you do
                                        because it’s hard to find a company so dedicated to the health of their
                                        customers these days.</q>
                                </div>
                                <div class="quote-custom-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span></div>
                                <div class="quote-custom-cite text-bold">
                                    <cite>Kate Wilson</cite>
                                </div>
                            </blockquote>
                        </div>
                        <div class="item">
                            <blockquote class="quote-custom">
                                <div class="quote-custom-title">
                                    <h6>Your level of service is absolutely outstanding!</h6>
                                </div>
                                <div class="quote-custom-q">
                                    <q>I've been receiving a box from you guys for roughly one year now, and
                                        absolutely love it. I could not be happier with the fresh produce I
                                        receive, and every time I've had to call Organic Farm with a question or
                                        concern, I have never been treated with anything but respect and
                                        absolute kindness. </q>
                                </div>
                                <div class="quote-custom-rating"><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span><span
                                        class="icon material-icons-grade icon-saffron icon-sm-big"></span></div>
                                <div class="quote-custom-cite text-bold">
                                    <cite>John Doe</cite>
                                </div>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
