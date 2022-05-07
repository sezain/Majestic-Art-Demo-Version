@extends('layouts.master')
@section('title', 'Contact')


@section('main-content')
<section id="firstSection" class="page-header section-60vh">
    <div class="container">
        <div class="row">        
            <div class="col-xl-12">
                <h2 class="text-black" style="text-align: center">
                    <span class="slide-over">
                        Contact our management
                    </span>
                </h2>
            </div>
        </div>
    </div>
</section>

<section class="page-main">
    <div class="container">
        <div data-animation-container class="row justify-content-center">
            

            <div class="col-md-4 col-sm-6">
                <div class="contact-item">
                    <div data-animation-child class="contact-icon slide-up delay-3" data-animation="slide-up">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <h3 data-animation-child class="contact-title slide-up delay-4" data-animation="slide-up">
                        address
                    </h3>
                    <p data-animation-child class="contact-text slide-up delay-5" data-animation="slide-up">
                        Dubai International Financial Centre, Dubai - UAE <br>
                        Cultural Village Jaddaf Waterfront, Dubai - UAE
                    </p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="contact-item">
                    <div data-animation-child class="contact-icon slide-up delay-3" data-animation="slide-up">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3 data-animation-child class="contact-title slide-up delay-4" data-animation="slide-up">
                        phone number
                    </h3>
                    <a href="tel:+97145783028" class="contact-text link">
                        <p data-animation-child class="contact-text slide-up delay-6" data-animation="slide-up">
                            +971 4 578 3028
                        </p>
                    </a>                    
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="contact-item">
                    <div data-animation-child class="contact-icon slide-up delay-3" data-animation="slide-up">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <h3 data-animation-child class="contact-title slide-up delay-4" data-animation="slide-up">
                        email
                    </h3>
                    <div data-animation-child class="slide-up delay-5" data-animation="slide-up">
                        <a href="mailto:info@majesticarts.com" class="contact-text link">
                            <p data-animation-child class="contact-text slide-up delay-6" data-animation="slide-up">
                                info@majesticarts.com
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-large overlay-black bg-image lazy" style="margin-top: 32px">
    <div class="container">
        <div data-animation-container class="form-outer row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title section-title-small text-center">
                    <h2 data-animation-child class="text-white slide-up" data-animation="slide-up">
                        Lets get in touch
                    </h2>
                </div>

                <form method="POST" action="{{ route('sendmail') }}" class="contact-message row" id="form" >
                    @csrf
                    <div data-animation-child class="form-group col-md-6 slide-up delay-3" data-animation="slide-up">
                        <input id="username" type="text" name="name" placeholder="Name">
                    </div>
                    <div data-animation-child class="form-group col-md-6 slide-up delay-3" data-animation="slide-up">
                        <input id="email" type="email" name="email" placeholder="Email">
                    </div>
                    <div data-animation-child class="form-group col-12 slide-up delay-4" data-animation="slide-up">
                        <textarea id="message" name="message" placeholder="Message" rows="3"></textarea>
                    </div>
                    <div data-animation-child class="col-12 text-center slide-up delay-5" data-animation="slide-up">
                        <button class="btn btn-outline-white text-white" type="submit">send message</button>
                    </div>
                </form>
                    <!-- form end -->

                <div class="output-message-outer">
                    <div class="output-message text-center alert"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

        