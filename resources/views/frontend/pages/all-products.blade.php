@extends('frontend.layout.web')
@section('content')
<!-- Breadcrumbs-->
<section class="section section-50 breadcrumbs-wrap custom-bg-image novi-background">
    <div class="container text-center">
        <h2>All Products</h2>
        <ul class="breadcrumbs-custom">
            <li><a href="index.html">Home</a><span>/</span></li>
            <li><a href="#">Shop </a><span>/</span></li>
            <li class="active">All Products </li>
        </ul>
    </div>
</section>

<section class="section-50 section-sm-75 section-md-115">
    <div class="container">
        <div class="row row-70">
            <div class="col-lg-3 offset-lg-top--10">
                <aside class="inset-lg-left-20">
                    <div class="row row-50 text-left">
                        <div class="col-md-4 col-lg-12"><span class="text-uppercase big-3 text-sbold">categories</span>
                            <div class="text-subline"></div>
                            <div class="input-group-custom offset-top-20">
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-register">
                                        <input name="input-group-radio" value="checkbox-2" type="checkbox"><span
                                            class="small-2"><span>Food</span> <span
                                                class="text-light">(37)</span></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-register">
                                        <input name="input-group-radio" value="checkbox-2" type="checkbox"><span
                                            class="small-2"><span>Vegetables</span> <span
                                                class="text-light">(21)</span></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-register">
                                        <input name="input-group-radio" value="checkbox-2" type="checkbox"><span
                                            class="small-2"><span>Fruits</span> <span
                                                class="text-light">(12)</span></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-register">
                                        <input name="input-group-radio" value="checkbox-2" type="checkbox"><span
                                            class="small-2"><span>Bread</span> <span
                                                class="text-light">(7)</span></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-register">
                                        <input name="input-group-radio" value="checkbox-2" type="checkbox"><span
                                            class="small-2"><span>Meat</span> <span
                                                class="text-light">(15)</span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12"><span class="text-uppercase big-3 text-sbold">brands</span>
                            <div class="text-subline"></div>
                            <div class="input-group-custom offset-top-20">
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-register">
                                        <input name="input-group-radio" value="checkbox-2" type="checkbox"><span
                                            class="small-2"><span>Organic Farm</span> <span
                                                class="text-light">(4)</span></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-register">
                                        <input name="input-group-radio" value="checkbox-2" type="checkbox"><span
                                            class="small-2"><span>Fresh Market</span> <span
                                                class="text-light">(21)</span></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline checkbox-register">
                                        <input name="input-group-radio" value="checkbox-2" type="checkbox"><span
                                            class="small-2"><span>Eco Food</span> <span
                                                class="text-light">(12)</span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-12"><span class="text-uppercase big-3 text-sbold">Price</span>
                            <div class="text-subline"></div>
                            <!--RD Range-->
                            <div class="rd-range" data-min="5" data-max="150" data-start="[34, 113]" data-step="1"
                                data-tooltip="true" data-min-diff="15" data-input=".rd-range-input-value-1"
                                data-input-2=".rd-range-input-value-2"></div>
                        </div>
                    </div>
                </aside>
            </div>

            <div class="col-lg-9">
                <div class="toolbar-shop">
                    <div class="toolbar-shop-sorter"><a class="toolbar-shop-icon active"
                            href="shop-grid-view.html"><span class="icon-sm mdi novi-icon mdi-view-module"></span></a><a
                            class="toolbar-shop-icon" href="shop-list-view.html"><span
                                class="icon-sm mdi novi-icon mdi-view-list"></span></a></div>
                    <div class="toolbar-shop-pager"><span class="toolbar-shop-current text-mantis">1-6 of 15</span>
                        <div class="form-group">
                            <label class="veil reveal-xs-inline-block">Show:</label>
                            <select class="form-control select-filter toolbar-shop-pager-select"
                                data-placeholder="Select an option" data-minimum-results-for-search="Infinity">
                                <option>6</option>
                                <option>12</option>
                                <option>18</option>
                                <option>24</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Product Card Start-->
                    @foreach($products as $product)
                    <div class="col-md-6 col-xl-4">
                        <div class="product-featured text-center">
                            <div class="product-featured-images"><img class="img-responsive"
                                    src="{{ asset('frontend/images/thumbnails/'.$product->thumbnail) }}" alt="" width="270" height="204" />
                            </div>
                            <div class="product-featured-rating"><span
                                    class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                    class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                    class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                    class="icon material-icons-grade icon-saffron icon-xs-small"></span><span
                                    class="icon material-icons-star_half icon-saffron icon-xs-small"></span></div>
                            <div class="product-featured-title">
                                <div class="h7 text-sbold"><a class="text-chateau-green"
                                        href="shop-single-products.html">{{ $product->name }}</a></div>
                            </div>
                            <div class="product-featured-price">
                                <span class="product-price-new h6 text-sbold">৳ {{ $product->price }}</span>
                                <!-- <span class="product-price-old h7 text-light text-regular">৳ {{ $product->price }}</span> -->
                            </div>
                            <div class="product-featured-block-hover"><a class="btn btn-icon btn-icon-left btn-success"
                                    href="shop-cart.html"><span class="icon fl-outicons-shopping-cart13"></span>Add to
                                    cart</a></div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Product Card End -->
                </div>
                <ul class="pagination-classic pagination-classic-center pagination-classic-1 pagination-classic-mod-1">
                    <li>
                        <ul>
                            <li class="first"><span class="mdi-chevron-double-left mdi novi-icon iocn"></span></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li class="last"><a class="mdi-chevron-double-right mdi novi-icon iocn" href="#"></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
