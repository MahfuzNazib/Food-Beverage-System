<header class="page-head">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
            data-md-device-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static"
            data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static"
            data-xl-device-layout="rd-navbar-static" data-sm-stick-up-offset="50px" data-lg-stick-up-offset="107px"
            data-stick-up-clone="false" data-stick-up="true" data-sm-stick-up="true" data-md-stick-up="true"
            data-lg-stick-up="true">
            <div class="container rd-navbar-outer text-center">
                <div class="row align-items-md-center justify-content-lg-between">
                    <div class="offset-xl-2 col-md-12 text-center col-lg-2 order-lg-2">
                        <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><img
                                    src="{{ 'frontend' }}/images/logo-3.png" alt=""></a></div>
                    </div>
                    <div class="col-md-12 text-lg-left col-xl-3 col-lg-4 order-lg-1">
                        <a class="text-middle text-gray preffix-left-10" href="#"><span> <img
                                    src="{{ 'frontend' }}/images/icons/location.png" height="22px" width="22px">
                            </span> 69
                            Halsey St, New York, Ny
                            10002.</a></div>
                    <div class="offset-xl-2 col-md-12 text-lg-right col-xl-3 order-lg-3 col-lg-4">
                        <span> <img src="{{ 'frontend' }}/images/icons/watch.png" height="22px" width="22px">
                        </span><span class="text-middle text-gray preffix-left-10">Opening Hours:
                            08:00am–7:30pm</span>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                    <!-- RD Navbar Toggle\-->
                    <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                    <button class="rd-navbar-collapse-toggle"
                        data-rd-navbar-toggle=".rd-navbar-outer"><span></span></button>
                    <!-- RD Navbar Brand-->
                    <div class="rd-navbar-brand"><a class="brand-name" href="index.html"><span>Organic
                                Farm</span></a></div>
                </div>
                <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('all_products') }}">All Products</a>
                        </li>

                        <!-- <li><a href="#">All Category</a>
                            <ul class="rd-navbar-megamenu">
                                <li>
                                    <p>Elements</p>
                                    <ul>
                                        <li><a href="buttons.html">Buttons</a></li>
                                        <li><a href="icons.html">Icons</a></li>
                                        <li><a href="tabs.html">Tabs</a></li>
                                        <li><a href="forms.html">Forms</a></li>
                                        <li><a href="grid-system.html">Grid System</a></li>
                                        <li><a href="typography.html">Typography</a></li>
                                        <li><a href="tables.html">Table Styles</a></li>
                                        <li><a href="progress-bars.html">Progress Bars</a></li>
                                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Pages 1</p>
                                    <ul>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="contacts.html">Contact Us</a></li>
                                        <li><a href="appointment.html">Make an Appointment</a></li>
                                        <li><a href="maintenance.html">Maintenance</a></li>
                                        <li><a href="our-farmers.html">Our Team</a></li>
                                        <li><a href="team-members.html">Team Member Profile</a></li>
                                        <li><a href="services.html">Services</a></li>
                                        <li><a href="single-services.html">Single Service</a></li>
                                        <li><a href="careers.html">Careers</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <p>Pages 2</p>
                                    <ul>
                                        <li><a href="faq.html">FAQ</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="login.html">Login Page</a></li>
                                        <li><a href="register.html">Register Page</a></li>
                                        <li><a href="testimonials.html">Clients</a></li>
                                        <li><a href="search-results.html">Search results</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="503.html">503 Page</a></li>
                                        <li><a href="privacy.html">Privacy Policy</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li> -->

                        <li><a href="#">Our Outlets</a>
                            <ul class="rd-navbar-dropdown">
                                <li><a href="grid-blog.html">Grid Blog</a></li>
                                <li><a href="classic-blog.html">Classic Blog</a></li>
                                <li><a href="masonry-blog.html">Masonry Blog</a></li>
                                <li><a href="modern-blog.html">Modern Blog</a></li>
                                <li><a href="classic-single-blog.html">Single Blog Post</a></li>
                            </ul>
                        </li>

                        <li><a href="#">About Us</a>
                            <ul class="rd-navbar-dropdown">
                                <li><a href="gallery.html">Grid Gallery</a></li>
                                <li><a href="masonry-gallery.html">Masonry Gallery</a></li>
                                <li><a href="cobles-gallery.html">Cobbles Gallery</a></li>
                                <li><a href="full-width-grid.html">Full Width Gallery</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                        <li><a href="{{ route('login.show') }}">SignIn</a></li>

                        <!-- RD Search-->
                        <li class="rd-navbar-search">
                            <!-- <span> <img src="{{ 'frontend' }}/images/icons/search.png" class="icon-size"> </span> -->
                            <button
                                class="rd-navbar-search-toggle icon rd-search-form-submit icon-xs fl-crisp-icons-search69 icon-gray"
                                data-rd-navbar-toggle=".rd-search"></button>
                            <form class="rd-search" action="search-results.html" method="GET"
                                data-search-live="rd-search-results-live">
                                <div class="form-group">
                                    <label class="form-label" for="rd-search-form-input">Search...</label>
                                    <input class="form-control" id="rd-search-form-input" type="text" name="s"
                                        autocomplete="off">
                                </div>
                                <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                <button class="icon rd-search-form-submit icon-xs fl-crisp-icons-search69 icon-gray"
                                    type="submit"></button>
                            </form>
                        </li>
                        <li class="rd-navbar-cart-wrap"><span class="rd-navbar-cart"><a class="icon icon-sm icon-gray"
                                    href="{{ route('get-cart') }}"><span> <img
                                            src="{{ 'frontend' }}/images/icons/shopping-cart.png" height="25px"
                                            width="25px">
                                    </span><span class="text-bold">$124.00</span></a></span></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
