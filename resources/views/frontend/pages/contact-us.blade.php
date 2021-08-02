@extends('frontend.layout.web')
@section('content')
<!-- Breadcrumbs-->
<section class="section section-50 breadcrumbs-wrap custom-bg-image novi-background">
    <div class="container text-center">
        <h2>Contact Us</h2>
        <ul class="breadcrumbs-custom">
            <li><a href="index.html">Home</a><span>/</span></li>
            <li class="active">Contact Us </li>
        </ul>
    </div>
</section>

<!-- Get In Touch-->
<section class="section section-50 section-sm-75 section-md-115 novi-background bg-cover">
    <div class="container">
        <div class="row row-55">
            <div class="col-lg-8 text-center">
                <h3 class="heading-3 text-center">Get In Touch</h3>
                <p class="offset-top-30 offset-md-top-40 offset-lg-top-60">We are available 24/7 by fax, e-mail
                    or by phone. You can also use the quick contact form to ask a question about our services
                    and products. We would be pleased to answer your questions or offer any help.</p>
                <form class="rd-mailform text-left offset-top-30 offset-md-top-50" data-form-output="form-output-global"
                    data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-25">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="contact-name">First Name</label>
                                <input class="form-control" id="contact-name" type="text" name="name"
                                    data-constraints="@Required">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="contact-last-name">Last Name</label>
                                <input class="form-control" id="contact-last-name" type="text" name="last-name"
                                    data-constraints="@Required">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label" for="contact-email">E-mail</label>
                                <input class="form-control" id="contact-email" type="email" name="email"
                                    data-constraints="@Required @Email">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="form-group">
                                <label class="form-label" for="contact-message">Message</label>
                                <textarea class="form-control" id="contact-message" name="message"
                                    data-constraints="@Required"></textarea>
                            </div>
                            <button class="btn btn-primary offset-top-25 btn-md-block" type="submit">send</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 inset-md-left-30 inset-lg-left-70">
                <div class="row text-left inset-lg-left-20 row-30">
                    <div class="col-lg-12 col-md-6">
                        <div class="offset-lg-top-10"><span class="h6 text-sbold text-bold">Social</span>
                            <div class="text-subline"></div>
                            <ul class="list-inline list-inline-md offset-top-20">
                                <li><a class="icon novi-icon icon-boulder icon-xs-middle fa-facebook" href="#"></a></li>
                                <li><a class="icon novi-icon icon-boulder icon-xs-middle fa-twitter" href="#"></a></li>
                                <li><a class="icon novi-icon icon-boulder icon-xs-middle fa-google" href="#"></a></li>
                                <li><a class="icon novi-icon icon-boulder icon-xs-middle fa-youtube" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-6"><span class="h6 text-sbold text-bold">Phone</span>
                        <div class="text-subline"></div>
                        <ul class="list-inline list-inline-md offset-top-20">
                            <li class="text-middle"><span class="icon icon-primary icon-xs-middle fa-phone"></span></li>
                            <li class="text-middle"><a class="text-content" href="tel:#">1-800-1234-567</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-6"><span class="h6 text-sbold text-bold">Address</span>
                        <div class="text-subline"></div>
                        <ul class="list-inline list-inline-md list-inline-flex inset-lg-right-30 offset-top-20">
                            <li class="text-middle"><span class="icon icon-primary icon-xs-middle fa-map-marker"></span>
                            </li>
                            <li class="text-middle"><a class="text-content" href="#">4578 Marmora St, San
                                    Francisco D04 89GR</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-12 col-md-6"><span class="h6 text-sbold text-bold">Opening Hours</span>
                        <div class="text-subline"></div>
                        <ul class="list-inline list-inline-md list-inline-flex inset-lg-right-10 offset-top-20">
                            <li class="text-middle"><span class="icon icon-primary icon-xs-small fa-clock-o"></span>
                            </li>
                            <li>
                                <ul class="list list-default">
                                    <li><span class="text-bold">Monday–Friday:</span> 9:00am–6:00pm
                                    </li>
                                    <li><span class="text-bold">Saturday:</span> 10:00am–4:00pm
                                    </li>
                                    <li><span class="text-bold">Sunday:</span> 10:00am–1:00pm
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
