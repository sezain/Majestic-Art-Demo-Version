 <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FontAwesome -->
    
     <title>The Majestic Arts Services islamic ind art </title>
     <meta name="description" content="The Majestic Arts Services islamic ind art"/>
     <meta name="Keywords" content="The Majestic Arts Services islamic ind art">
     <meta name='robots' content='noindex,follow' />
     <link rel="canonical" href="https://majesticarts.com/islamic-ind-art" />

@include('header')


@include('navigation')
 


        <!-- section start -->
        <section id="firstSection" class="portfolio-slider-column portfolio-slider-column-reveal">

            <!-- swiper-wrapper start -->
            <div class="swiper-wrapper">

                <!-- swiper-slide start -->
                @foreach($records as $record)
                <div class="swiper-slide">
                    <div class="portfolio-slider-column-item" >
                        <div class="portfolio-slider-column-img bg-image lazy" data-bg="url({{ asset('public/category/'.$record->image) }})"></div>

                        <a data-swup href="{{url('islamic-ind-art/'.$record->slug)}}" class="portfolio-slider-column-content">
                            <p class="text-theme">
                                <span>Indian & Islamic</span>
                            </p>
                            <h2 class="text-black">
                                <span>{{$record->name}}</span>
                            </h2>
                        </a>

                    </div>
                </div>
                @endforeach
                <!-- swiper-slide end -->

            </div>
            <!-- swiper-wrapper end -->


            <!-- slider-nav start -->
            <div class="portfolio-slider-column-navigation slide-content slide-content-light">
                <div class="slider-nav-outer">
                    <div class="slider-nav slider-nav-intro">
                        <div class="btn-prev circle circle-left click-target">
                            <div class="half-left">
                                <div class="item"></div>
                            </div>

                            <i class="icon-arrow-left"></i>

                            <div class="half-right">
                                <div class="item"></div>
                            </div>
                        </div>

                        <div class="btn-next circle circle-right click-target">
                            <div class="half-right">
                                <div class="item"></div>
                            </div>

                            <i class="icon-arrow-right"></i>

                            <div class="half-left">
                                <div class="item"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- slider-nav end -->

        </section>
        <!-- section end -->


@include('footer')