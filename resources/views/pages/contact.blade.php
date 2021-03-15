@extends('layouts.master')
@section('title', 'contact')
@section('content')
<section id="contact" class="contact-sec">
    <div class="container">
        <!--Heading-->
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <div class="about-heading heading-details">
                    <h4 class="heading">LET'S GET IN TOUCH</h4>
                </div>
            </div>
        </div>

        <!--contact us-->

        <div class="row">
            <div class="col-12 col-lg-6 contact-details text-center text-lg-left">
                <div class="location-details">
                    <h4 class="contact-heading">MegaOne <strong>Office</strong></h4>
                    <p class="contact-address">123 Stree New York City , United States Of America.</p>
                    <ul class="contact-list">
                        <li><span>Office Telephone :</span> 001 01085379709</li>
                        <li><span>Mobile :</span> 001 63165370895</li>
                        <li><span>Email :</span> admin@website.com</li>
                        <li><span>Inquiries :</span> email@website.com</li>
                        <li><span>Mon-Fri:</span> 9am to 6pm</li>
                    </ul>
                    <ul class="slider-social contact-s-media">
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="lab la-facebook-f"></i> </a> </li>
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="lab la-twitter"></i> </a> </li>
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="lab la-google-plus-g"></i> </a> </li>
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="lab la-linkedin-in"></i> </a> </li>
                        <li class="animated-wrap"><a class="animated-element" href="javascript:void(0);"><i class="lab la-instagram"></i> </a> </li>
                    </ul>
                </div>
            </div>

            <div class="col-12 col-lg-6 contact-form-box">
                <form class="contact-form">
                    <div class="row">
                        <div class="col-6">
                            <div class="col-sm-12" id="result"></div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="First Name:" required="" id="first_name" name="first_name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Last Name:" required="" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email:" required="" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message" id="message" name="message"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-large yellow-and-white-slider-btn mt-4" id="submit_btn">Contact Now</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
