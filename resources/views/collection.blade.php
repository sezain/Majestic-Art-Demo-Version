@extends('layouts.master') 
@section('title', 'Majestic Arts Collection')

@push('style')
     <style>
        .portfolio-info{ left: 0; bottom: inherit;top: 0; width: 100%; position: inherit;}
        .portfolio-item-left{padding-top: 0; padding-right: 0; }
        h3 { line-height: 36px;}
    </style>
@endpush

@section('main-content')
<section id="firstSection" class="page-header section-60vh">
    <div class="container">
        <div class="row">       
            <div class="col-xl-12">
                <h1 class="page-header-title text-black">
                    <span class="slide-over">The Majestic Arts Collection</span>
                </h1>
            </div>
            <div class="col-xl-12">
                <p class='page-header-text text-lead text-black '>
                    <span class="slide-over">
                        Majestic Arts own Treasury of Art Collection filled with most Exceptional 
                        and Beyond-Reach Works of Arts from Renaissance till works of Arts by 
                        living legends like Jeff Koon, Jogen Chowdhury, Mahmoud Farshchian and 
                        Choy Weng Yang. Great works of art in our art collection are commissioned 
                        and few are rarest pre-commissioned works. We imply stringent 
                        non-compromise due diligence process to protect our client’s investments 
                        in these great works of arts, we bonafide the authenticity of artwork 
                        Scientifically by implementing custom made multi-spectral imaging technique. 
                        We examine the full history of the work, from various attempts that the artist 
                        made prior to completing the painting and establish the chain of ownership 
                        through centuries. <br> <br> List of our collections by the segments and 
                        Artists names; Titles and further details are available upon request.
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>


<!-- about page main start -->
<section class="page-main">
    <div class="section-large">     
        <div data-animation-container class="container">
            @foreach ($categories as $category)
                @if($category->artists->count() > 0)
                <div class="row" style="background: #faf8f1; margin-bottom: 30px; padding: 50px 20px;">
                    <div class="col-lg-12">
                        <div data-animation-child class="section-title section-title-large slide-up" data-animation="slide-up"  style="margin-bottom: 0;">
                            <h3>{{ $category->name }}:</h3>
                        </div>
                    </div>
                    @foreach ($category->artists as $artist)
                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">{{ $artist->lifespan }}</span>
                                    <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">{{ $artist->name }}</h2>
                                </div>
                            </span>
                        </div>
                    @endforeach
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
@endsection
