@extends('layouts.master')
@section('title', 'About')

@section('main-content')
<!-- about page intro start -->
<section id="firstSection" class="page-header section-60vh">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row" >             
            <div class="col-xl-12">
                <h1 class="page-header-title text-black">
                    <span class="slide-over">Majestic Arts</span>
                </h1>
            </div>
            <div class="col-xl-12">
                <p class='page-header-text text-lead text-black'>
                <span class="slide-over">Majestic Arts was founded with a vision to provide a 360-degree range of services in the art industry</p>
            </div>
        </div>
    </div>            
</section>

<section class="page-main">
    <div class="section-large">
        <div class="hero"> 
            <div data-animation-container class="container">
                <!-- row start -->
                <div class="row" style=" background: #fbf6f0; padding: 50px 30px;">
                    <div class="col-lg-8">
                        <div data-animation-child class="section-title section-title-large slide-up" data-animation="slide-up">
                            <h2>Introduction</h2>
                        </div>
                        <p data-animation-child class="text-lead text-black slide-up delay-1" data-animation="slide-up">
                        Majestic Arts is a Premier Art curator par excellence with rich connections to Royalty, Art Institutions and High Net Worth Individuals. Our expertise covers extensive and diverse topics, from Indian, Islamic and Renaissance works, to Medieval and Impressionist Art among others. 
                        <br>
                        Majestic Arts provides a platform for buying and selling art paintings, engaging in market discussions regarding specific art pieces,  and has already facilitated sales of artworks that are cumulatively worth in excess of $6 billion.
                        <br> <br> 
                        Art has existed since the beginning of time but its relevance, form, and importance in everyday life has evolved. It is considered to be the pinnacle of human creative expression, exhibited through paintings, sculptures, and architecture. Art often tells a story, reflecting the values and aspirations of the period. The art industry is estimated to be worth approximately USD 65-70 billion. But currently, there is a major gap in reliable art authentication.
                        <br> <br> 
                        Majestic Arts addresses this requirement by outsourcing the authentication process to a world-renowned reliable company. which has far more experience and database with modern technology  than most of the contemporary authenticators. Majestic Arts’ unique authentication arrangements with a unique business models, combined with its unfettered access within the art world make it the most reliable ideal choice.
                    </div>
                    <div class="col-lg-4">
                        <div data-animation-child class="section-title about-img section-title-large slide-up port_img tilt" style="transform: perspective(1500px); " data-animation="slide-up">
                            <a href="#">
                                <img src="{{ asset("img/a-1.jpg") }}" alt="Client">
                            </a>
                        </div>
                    </div>
                 

                        <div data-animation-child class="col-lg-12" style="padding: 0 0 230px 0; margin-top: 50px; "  data-animation="slide-up">
                            <img id="loading-dc" src="{{ asset("img/cr-logoo.png") }}" width="300" style=" position: absolute; z-index: 99;" />
                        </div>

            <div data-animation-container="" class="col-md-3 animated">
                <a class="col-boxed" data-swup="" href="#">
                    <div class="slow bg-image lazy" data-bg="url({{ asset('img/a-2.jpg') }})" data-was-processed="true"
                        style="background-image: url({{ asset('img/a-2.jpg') }})"></div>
                    <h3>
                        Interior of Palm House<br /><span>Carl Blechen</span>
                    </h3>
                </a>
            </div>

            <div data-animation-container="" class="col-md-3 animated">
                <a class="col-boxed" data-swup="" href="#">
                    <div class="slow bg-image lazy" data-bg="url({{ asset('img/a-3.jpg') }})" data-was-processed="true"
                        style="background-image: url({{ asset('img/a-3.jpg') }})"></div>
                    <h3>
                        Equestrian Portrait of Charles I<br /><span>Van Dyck became Charles</span>
                    </h3>
                </a>
            </div>

            <div data-animation-container="" class="col-md-3 animated">
                <a class="col-boxed" data-swup="" href="#">
                    <div class="slow bg-image lazy" data-bg="url({{ asset('img/a-4.jpg') }})" data-was-processed="true"
                        style="background-image: url({{ asset('img/a-4.jpg') }})"></div>
                    <h3>
                        The Night Watch<br /><span>Rembrandt Harmensz van Rijn</span>
                    </h3>
                </a>
            </div>

            <div data-animation-container="" class="col-md-3 animated">
                <a class="col-boxed" data-swup="" href="#">
                    <div class="slow bg-image lazy" data-bg="url({{ asset('img/a-5.jpg') }})" data-was-processed="true"
                        style="background-image: url({{ asset('img/a-5.jpg') }})"></div>
                    <h3>The Hussar<br /><span>Frederic Remington</span></h3>
                </a>
            </div>
        </div>
        <!-- row end -->



            </div>
        </div>
    </div>
</section>
@endsection

