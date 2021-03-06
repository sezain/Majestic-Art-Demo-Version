@extends('layouts.master') 

@section('title', 'Home')

@push('style')

<style type="text/css">

    .bullet {

        border-radius: 0px !important;

    }
 
    .pr-page {

        display: none;

    }
 
    .scroll-down {

        position: absolute !important;

    }
 
    .form-control {

        border-bottom: 1px solid #ba9767 !important;

        border-top: none !important;

        border-left: none !important;

        border-right: none !important;

        border-radius: 0px !important;

        background-color: #fbf8f1 !important;

    }

    header.header.header-white.header-to-top {

        background-color: #1a314100;

    }
 
    .swiper-container-autoheight,

    .swiper-container-autoheight .swiper-slide {

        padding: 20px !important;

    }



    @media screen and (max-width: 425px) {

        .section-title img {

            /* width: 346px !important; */

        }



        #left_img_tag img {

            border-bottom: 5px solid red !important;

            width: 30px !important;

        }



        @media screen and (max-width: 600px) {

            .slide-title {

                font-size: 30px !important;

                margin-top: 90px !important;

            }



            @media screen and (max-width: 425px) {

                .custom-block {

                    margin-top: 0px !important;

                    padding: 0px !important;

                }



                .custom-heading {

                    font-size: 20px;

                }



                .custom-slide {

                    font-size: 16px;

                }

            }

        }

    }



</style>



<style type="text/css">

.cnt223 {

    max-width: 600px;

    width: 100%;

    /* min-height: 150px; */

    margin: 100px auto;

    background: #ffffff;

    position: relative;

    z-index: 103;

    padding: 24px;

    border-radius: 20px;

    box-shadow: 0px 4px 40px 10px rgb(0 0 0 / 10%);

    /* margin-top: 10%; */

    margin: 0 15px;

}



.cnt223 .x{

    float: right;

    height: 35px;

    left: 22px;

    position: relative;

    top: -25px;

    width: 34px;

}



.cnt223 .x:hover{

    cursor: pointer;

}



.popup {

    position: fixed;

    background: transparent;

    -webkit-backdrop-filter: blur(5.3px);

    backdrop-filter: blur(5.3px);

    width: 100vw;

    height: 100vh;

    top: 0;

    left: 0;



    display: flex;

    flex-direction: row;

    justify-content: center;

    align-items: center;

    z-index: 4000;

    text-align: center;

}



.popup p {

    color: #203446; 

}



.button-7{

    background: #b99666;

    /* font-weight: bold; */

    opacity: 1;

    font-style: normal;

    font-weight: 700;

    font-size: 18px;

    line-height: 24px;

    text-align: center;

    text-transform: capitalize;

    width: 100%;

    color: white;

    border-radius: 10px;

    padding: 8px;

    transition: all .3s ease-in-out;

    border: 1px solid #b99666;

}



.button-7:hover {

    color: #b99666;

    background: transparent;

}



.row{

    margin-left: 0;

    margin-right: 0;

}



.black_overlay {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}
.white_content {
  display: none;
  position: fixed;
  top: 25%;
  width: 100%;
  height: 50%;
  max-height:700px;
  padding: 0;
  border: none;
  background-color: white;
  z-index: 1002;
  overflow: auto;
}





@media only screen and (max-width: 768px){

    .cnt223 {    max-height: 450px;

    overflow-y: scroll;}

}

</style>

@endpush 



@section('main-content')

<!-- slider  start -->

<section id="firstSection" class="swiper-container slider-main slider-main-reveal bg-black">

    <div class="swiper-wrapper">

        <div class="swiper-slide slider-slide">

            <div class="slider-inner overlay-black bg-image lazy" data-bg="url({{ asset('img/pages/home/1.jpg') }})"

                data-swiper-parallax="1000">

                <div class="container">

                    <div class="row">

                        <div class="col-xl-7 col-lg-8 offset-lg-1">

                            <div class="slide-content slide-content-light slide-content-intro">

                                <h2 class="slide-title">

                                    <span>???The true work of art is but a shadow

                                        of the divine perfection.???</span>

                                </h2>

                                <p class="slide-subtitle">

                                    <span>Michelangelo</span>

                                </p>

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

                                <!-- slider-nav end -->

                            </div>

                        </div>

                    </div>

                    <!-- row end -->

                </div>

                <!-- container end -->

            </div>

            <!-- slide content end -->

        </div>

        <!-- swiper-slide end -->



        <!-- swiper-slide start -->

        <div class="swiper-slide slider-slide">

            <!-- slide content start -->

            <div class="slider-inner overlay-black bg-image lazy" data-bg="url({{ asset('img/pages/home/3.jpg') }})"

                data-swiper-parallax="1000">

                <!-- container start -->

                <div class="container">

                    <!-- row start -->

                    <div class="row">

                        <div class="col-xl-7 col-lg-8 offset-lg-1">

                            <div class="slide-content slide-content-light slide-content-second">

                                <h2 class="slide-title">

                                    <span>???White is poison to a picture, use it

                                        only in highlights.???</span>

                                </h2>

                                <p class="slide-subtitle">

                                    <span>Peter Paul Rubens</span>

                                </p>



                                <!-- slider-nav start -->

                                <div class="slider-nav-outer">

                                    <div class="slider-nav slider-nav-visible">

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

                                <!-- slider-nav end -->

                            </div>

                        </div>

                    </div>

                    <!-- row end -->

                </div>

                <!-- container end -->

            </div>

            <!-- slide content end -->

        </div>

        <!-- swiper-slide end -->



        <!-- swiper-slide start -->

        <div class="swiper-slide slider-slide">

            <!-- slide content start -->

            <div class="slider-inner overlay-black bg-image lazy" data-bg="url({{ asset('img/pages/home/2.jpg') }})"

                data-swiper-parallax="1000">

                <!-- container start -->

                <div class="container">

                    <!-- row start -->

                    <div class="row">

                        <div class="col-xl-7 col-lg-8 offset-lg-1">

                            <div class="slide-content slide-content-light slide-content-second">

                                <h2 class="slide-title">

                                    <span>???I paint because the spirits whisper

                                        madly inside my head.???</span>

                                </h2>

                                <p class="slide-subtitle">

                                    <span>El Greco</span>

                                </p>



                                <!-- slider-nav start -->

                                <div class="slider-nav-outer">

                                    <div class="slider-nav slider-nav-visible">

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

                                <!-- slider-nav end -->

                            </div>

                        </div>

                    </div>

                    <!-- row end -->

                </div>

                <!-- container end -->

            </div>

            <!-- slide content end -->

        </div>

        <!-- swiper-slide end -->



        <!-- swiper-slide start -->

        <div class="swiper-slide slider-slide">

            <!-- slide content start -->

            <div class="slider-inner overlay-black bg-image lazy" data-bg="url({{ asset('img/pages/home/4.jpg') }})"

                data-swiper-parallax="1000">

                <!-- container start -->

                <div class="container">

                    <!-- row start -->

                    <div class="row">

                        <div class="col-xl-7 col-lg-8 offset-lg-1">

                            <div class="slide-content slide-content-light slide-content-second">

                                <h2 class="slide-title">

                                    <span>???Art washes away from the soul the dust

                                        of everyday life.???</span>

                                </h2>

                                <p class="slide-subtitle">

                                    <span>Pablo Picasso</span>

                                </p>



                                <!-- slider-nav start -->

                                <div class="slider-nav-outer">

                                    <div class="slider-nav slider-nav-visible">

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

                                <!-- slider-nav end -->

                            </div>

                        </div>

                    </div>

                    <!-- row end -->

                </div>

                <!-- container end -->

            </div>

            <!-- slide content end -->

        </div>

        <!-- swiper-slide end -->

    </div>

    <!-- swiper-wrapper end -->



    <!-- bottom-left-links start -->

    <div class="bottom-left-links">

        <div class="">

            <a class="text-white" href="https://www.facebook.com/majesticartsofficial" rel="me" target="_blank"><i

                    class="fab fa-facebook"></i></a>

        </div>

        <div class="">

            <a class="text-white" href="https://www.instagram.com/themajesticarts/" rel="me" target="_blank"><i

                    class="fab fa-instagram"></i></a>

        </div>

        <div class="">

            <a class="text-white" href="https://twitter.com/themajesticarts" rel="me" target="_blank"><i class="fab fa-twitter"></i></a>

        </div>

        <div class="">

            <a class="text-white" href="https://www.linkedin.com/company/majesticarts/" rel="me" target="_blank">

                <i class="fab fa-linkedin-in"></i>

            </a>

        </div>

    </div>

    <!-- bottom-left-links end -->



    <!-- pagination start -->

    <div class="main-slider-pagination pagination pagination-light"></div>

    <!-- pagination end -->



    <a href="#secdd" class="scroll-down" address="true"><img src="{{ asset('img/assets/scroll-down.png') }}" alt="scroll down" /></a>

</section>

<!-- slider end -->



<section class='popup'>

    <div class='cnt223'>

        <div class="container">

            <div class="row" style="margin: 0px; margin-left: 0px;">

                <div class="col-md-4"></div>

                <div class="col-md-4">

                    <img style="width:120px; text-align: center;" src="{{ asset('majesticarts-logo-black.svg') }}"  alt="logo">

                </div>

                <div class="col-md-4"></div>

            </div>

            <br>



            <div class="row" style="width: 100%;">

                {{-- <p > I Understand,  </p> <br/> --}}



                <div class="col-md-2"></div>

                <div class="col-md-8">

                    <h3 style="text-align: center;">

                        Dear Visitors,

                    </h3>

                </div>

                <div class="col-md-2"></div>





                

            </div>

            <br>



            <div class="row">

                <p > Due to the fact that there are so many companies having fake profiles on the internet, some of the imposters have also made fake profiles of our company as well.  </p> <br>

                <p >The Dubai Police is also aware about it; therefore, for the people who want to visit the gallery, it is informed that before the pandemic, the gallery has been moved from Boulevard Plaza Tower 1 to 150th Floor Burj Khalifa Tower Dubai and it is available through appointment.</p><br>

                <p >If somebody wants to visit the gallery, they can email us a request at <a href="mailto:info@majesticarts.com"> info@majesticarts.com</a> for at least two hours before booking an appointment so that no one gets misdirected.</p><br>

            </div>

        </div>



            <div class="row" style="width: 100%;">

                <button class="button-7" id="close"  onclick="hideDiv()" role="button">I Understand</button>

            </div>

    </div>

</section>



<script >

    function hideDiv() {

        $(document).ready(function(){

        $(".button-7").click(function(){

            $(".popup").hide();

        });

        });

    }

 </script>



<!-- section start -->

<section id="secdd" class="ok intro section-large section-80vh" style="

        background-color: #fbf6f1;

        background-image: url({{ asset('img/pages/home/6.jpg') }});

        background-size: 100%;

        background-repeat: no-repeat;

    ">

    <!-- container start -->

    <div data-animation-container class="container">

        <!-- row start -->

        <div class="row" style="margin-top: 50px">

            <div class="col-lg-6 col-md-6 col-sm-12">

                <div data-animation-child class="section-title section-title-large slide-up port_img"

                    style="transform: perspective(1500px)" data-animation="slide-up"> 

                    <img class="layer3-style" style="min-width: 100%;" src="{{ asset('img/pages/home/info_section_image.png') }}"

                        alt="Stars paintings" />

                </div>

            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 text-black mt-4">

                <div data-animation-child class="section-title section-title-large slide-up" data-animation="slide-up">

                    <h2 class="text-black">The Majestic Arts</h2>

                    <br />

                    <span style="color: '#b99666'">The Premier Art curator par excellence</span>

                </div>



                <p data-animation-child class="text-lead text-black slide-up delay-1" data-animation="slide-up"

                    style="line-height: 34px; text-align: justify">

                    The Majestic Arts is a Premier Art curator par excellence

                    with rich connections to Royalty, Art Institutions and High

                    Net Worth Individuals. The Majestic Arts expertise covers

                    extensive and diverse topics, from Indian, Islamic and

                    Renaissance works, to Medieval and Impressionist Art among

                    others. Majestic Arts provides a platform for buying and

                    selling art paintings, engaging in market discussions

                    regarding specific art pieces,and has already facilitated

                    sales of artworks that are cumulatively worth in excess of

                    $6 billion. The Majestic Arts gallery in Dubai offers an

                    impressive collection.

                </p>

            </div>

        </div>

        <!-- row end -->

        <!-- row start -->

        <div class="row" style="margin-top: 160px" id="paintings">

            <div class="col-xl-12 col-lg-12">

                <div data-animation-container="" class="section-title section-title-medium animated">

                    <p data-animation-child="" style="text-align: center"

                        class="text-additional subtitle slide-right slide-anim" data-animation="slide-right">

                        A Premier Art curator par excellence with rich

                        connections to Royalty, <br />

                        Art Institutions and High Net Worth Individuals.

                    </p>

                    <h2 data-animation-child="" style="text-align: center; width: 100%"

                        class="text-black bg-reveal-light cover-right delay-1 cover-right-anim"

                        data-animation="cover-right">

                        <span>The assurance of buying unique pieces</span>

                    </h2>

                </div>

            </div>

        </div>

        <!-- row end -->



        <!-- row start -->

        <div class="row" style="margin-bottom: 120px" >

            <div data-animation-container="" class="col-md-3 animated jmd">

                <a class="col-boxed to-id" data-swup="" href="#paintings">

                    <div class="slow bg-image lazy" data-bg="url({{ asset('img/pages/home/a-2.jpg') }})" data-was-processed="true"

                        style="background-image: url({{ asset('img/pages/home/a-2.jpg') }})"></div>

                    <h3>

                        Interior of Palm House<br /><span>Carl Blechen</span>

                    </h3>

                </a>

            </div>



            <div data-animation-container="" class="col-md-3 animated jmd">

                <a class="col-boxed to-id" data-swup="" href="#paintings">

                    <div class="slow bg-image lazy" data-bg="url({{ asset('img/pages/home/a-3.jpg') }})" data-was-processed="true"

                        style="background-image: url({{ asset('img/pages/home/a-3.jpg') }})"></div>

                    <h3>

                        Equestrian Portrait of Charles I<br /><span>Van Dyck became Charles</span>

                    </h3>

                </a>

            </div>



            <div data-animation-container="" class="col-md-3 animated jmd">

                <a class="col-boxed to-id" data-swup="" href="#paintings">

                    <div class="slow bg-image lazy" data-bg="url({{ asset('img/pages/home/a-4.jpg') }})" data-was-processed="true"

                        style="background-image: url({{ asset('img/pages/home/a-4.jpg') }})"></div>

                    <h3>

                        The Night Watch<br /><span>Rembrandt Harmensz van Rijn</span>

                    </h3>

                </a>

            </div>



            <div data-animation-container="" class="col-md-3 animated jmd">

                <a class="col-boxed to-id" data-swup="" href="#paintings">

                    <div class="slow bg-image lazy" data-bg="url({{ asset('img/pages/home/a-5.jpg') }})" data-was-processed="true"

                        style="background-image: url({{ asset('img/pages/home/a-5.jpg') }})"></div>

                    <h3>The Hussar<br /><span>Frederic Remington</span></h3>

                </a>

            </div>

        </div>

        <!-- row end -->

    </div>

    <!-- container end -->

</section>

<!-- section end -->



<!-- Bilal -->



<div class="container-fluid testi-slide-box">

    <div class="container" style="padding: 0">

        <div class="row">

            <div class="col-sm-12 custom-block" style="z-index: 50; padding: 0">

                <!-- container start -->

                <div class="testimonials">

                    <!-- testimonials-slider start -->

                    <div data-animation-container class="testimonials-slider">

                        <!-- swiper-wrapper start -->

                        <div class="swiper-wrapper">

                            <!-- Western Art Slide -->

                            <div class="swiper-slide slider-slide">

                                <!-- row start -->

                                <div class="row justify-content-center">

                                    <div class="testimonials-item">

                                        <div class="col-lg-7 col-md-7 col-sm-12" style="

                                                float: left;

                                                margin-top: 60px;

                                            ">

                                            <h3 class="text-white custom-heading" style="

                                                    line-height: 47px !important;

                                                ">

                                                Renaissance Art

                                            </h3>

                                            <p data-animation-child

                                                class="testimonials-comment text-white text-center slide-up delay-2 custom-slide"

                                                data-animation="slide-up">

                                                The Renaissance (meaning

                                                rebirth) was a movement that

                                                took place across Europe during

                                                the 14th, 15th and 16th

                                                centuries.It was characterized

                                                by an interest in nature,

                                                greater focus on individualism,

                                                interest in the world and

                                                concepts that had been taken for

                                                granted until then, as well as a

                                                greater emphasis on classical

                                                learning.

                                            </p>

                                            <a href="#" class="testimonials-btn">Discover More</a>

                                        </div>

                                        <div class="col-lg-5 col-md-5 col-sm-12" style="float: left">

                                            <img style="

                                                    width: 100%;

                                                    margin-top: 20px;

                                                " src="{{ asset('img/pages/home/the-annunciation.png') }}" alt="Stars paintings" />

                                        </div>

                                    </div>

                                </div>

                                <!-- row end -->

                            </div>

                            <!-- Western Art Slide  end -->



                            <!-- Medieval Art Slide -->

                            <div class="swiper-slide slider-slide">

                                <!-- row start -->

                                <div class="row justify-content-center">

                                    <div class="testimonials-item">

                                        <div class="col-lg-7 col-md-7 col-sm-12" style="

                                                float: left;

                                                margin-top: 60px;

                                            ">

                                            <h3 class="text-white custom-heading" style="

                                                    line-height: 47px !important;

                                                ">

                                                Medieval Art

                                            </h3>

                                            <p data-animation-child

                                                class="testimonials-comment text-white text-center slide-up delay-2 custom-slide"

                                                data-animation="slide-up">

                                                Medieval Art in the Western

                                                world covers over a thousand

                                                years of art across Europe, the

                                                Middle East and North Africa.

                                                Medieval Art includes several

                                                distinct movements and periods

                                                based on genre, region and time

                                                period, such as Early Christian

                                                Art, Byzantine Art, Anglo-Saxon

                                                Art, Viking Art, Insular Art,

                                                Romanesque Art and Gothic Art,

                                                amongst others.

                                            </p>

                                            <a href="#" class="testimonials-btn">Discover More</a>

                                        </div>

                                        <div class="col-lg-5 col-md-5 col-sm-12" style="float: left">

                                            <img style="

                                                    width: 100%;

                                                    margin-top: 20px;

                                                " src="{{ asset('img/pages/home/the-lion-hunt.jpg') }}" alt="Stars paintings" />

                                        </div>

                                    </div>

                                </div>

                                <!-- row end -->

                            </div>

                            <!-- Medieval Art end -->



                            <!-- Indian Art Slide -->

                            <div class="swiper-slide slider-slide">

                                <!-- row start -->

                                <div class="row justify-content-center">

                                    <div class="testimonials-item">

                                        <div class="col-lg-7 col-md-7 col-sm-12" style="

                                                float: left;

                                                margin-top: 60px;

                                            ">

                                            <h3 class="text-white custom-heading" style="

                                                    line-height: 47px !important;

                                                ">

                                                Western Art

                                            </h3>

                                            <p data-animation-child

                                                class="testimonials-comment text-white text-center slide-up delay-2 custom-slide"

                                                data-animation="slide-up">

                                                Western Art encompasses all

                                                visual art produced in Europe

                                                (and later, the Americas)- from

                                                the prehistoric age right

                                                through to post-modernism. What

                                                began in the form of rock and

                                                cave paintings during the

                                                Paleolithic Age, eventually

                                                evolved into Classical

                                                Renaissance, Impressionist,

                                                Modern, and Postmodern Art.

                                            </p>

                                            <a href="#" class="testimonials-btn">Discover More</a>

                                        </div>

                                        <div class="col-lg-5 col-md-5 col-sm-12" style="float: left">

                                            <img style="

                                                    width: 100%;

                                                    margin-top: 20px;

                                                " src="{{ asset('img/pages/home/majestic-arts-collection.jpg') }}"

                                                alt="Stars paintings" />

                                        </div>

                                    </div>

                                </div>

                                <!-- row end -->

                            </div>

                            <!-- Indian Art end -->



                            <!-- Islamic Art slide -->

                            <div class="swiper-slide slider-slide">

                                <!-- row start -->

                                <div class="row justify-content-center">

                                    <div class="testimonials-item">

                                        <div class="col-lg-7 col-md-7 col-sm-12" style="

                                                float: left;

                                                margin-top: 60px;

                                            ">

                                            <h3 class="text-white custom-heading" style="

                                                    line-height: 47px !important;

                                                ">

                                                Modern Art

                                            </h3>

                                            <p data-animation-child

                                                class="testimonials-comment text-white text-center slide-up delay-2 custom-slide"

                                                data-animation="slide-up">

                                                Modern art represents art

                                                produced during the 19th and

                                                20th centuries, and is mainly

                                                associated with pieces that

                                                eschew the traditions of the

                                                past in favour of the spirit of

                                                experimentation. Modern artists

                                                tend to experiment with new ways

                                                of looking at things and provide

                                                fresh ideas about the nature of

                                                materials and functions of art.

                                                Modern art tends to shy away

                                                from the creation of a narrative

                                                and focuses more on the

                                                abstract, allowing each viewer

                                                to interpret a work of art

                                                subjectively.

                                            </p>

                                            <a href="#" class="testimonials-btn">Discover More</a>

                                        </div>

                                        <div class="col-lg-5 col-md-5 col-sm-12" style="float: left">

                                            <img style="

                                                    width: 100%;

                                                    margin-top: 20px;

                                                " src="{{ asset('img/pages/home/fab-pacaso.jpg') }}" alt="Stars paintings" />

                                        </div>

                                    </div>

                                </div>

                                <!-- row end -->

                            </div>

                            <!-- Islamic Art end -->



                            <!-- Renaissanc Art Slide -->

                            <div class="swiper-slide slider-slide">

                                <!-- row start -->

                                <div class="row justify-content-center">

                                    <div class="testimonials-item">

                                        <div class="col-lg-7 col-md-7 col-sm-12" style="

                                                float: left;

                                                margin-top: 60px;

                                            ">

                                            <h3 class="text-white custom-heading" style="

                                                    line-height: 47px !important;

                                                ">

                                                Postmodern Art

                                            </h3>

                                            <p data-animation-child

                                                class="testimonials-comment text-white text-center slide-up delay-2 custom-slide"

                                                data-animation="slide-up">

                                                Postmodern art encompasses a

                                                body of varied art movements

                                                that contradict certain aspects

                                                of modern art. Postmodernism is

                                                characterized by certain

                                                distinct features, such as the

                                                use of text as the central

                                                artistic element, the use of

                                                several distinct entities to

                                                create a new whole, the emphasis

                                                on the concept rather than the

                                                aesthetic and the recycling of

                                                past themes and ideas with the

                                                addition of a modern-day twist.

                                            </p>

                                            <a href="#" class="testimonials-btn">Discover More</a>

                                        </div>

                                        <div class="col-lg-5 col-md-5 col-sm-12" style="float: left">

                                            <img style="

                                                    width: 100%;

                                                    margin-top: 20px;

                                                " src="{{ asset('img/pages/home/avignon-majestic-arts.jpg') }}"

                                                alt="Stars paintings" />

                                        </div>

                                    </div>

                                </div>

                                <!-- row end -->

                            </div>

                            <!-- Renaissanc Art end -->



                            <!-- Modern Art Slide -->

                            <div class="swiper-slide slider-slide">

                                <!-- row start -->

                                <div class="row justify-content-center">

                                    <div class="testimonials-item">

                                        <div class="col-lg-7 col-md-7 col-sm-12" style="

                                                float: left;

                                                margin-top: 60px;

                                            ">

                                            <h3 class="text-white custom-heading" style="

                                                    line-height: 47px !important;

                                                ">

                                                Indian Art

                                            </h3>

                                            <p data-animation-child

                                                class="testimonials-comment text-white text-center slide-up delay-2 custom-slide"

                                                data-animation="slide-up">

                                                Indian art covers art that has

                                                been produced by ancient Indian

                                                civilizations, ranging as far

                                                back as 3500 BC. It includes a

                                                variety of art forms, such as

                                                paintings, sculptures,

                                                tapestries, pottery and textile

                                                arts. Geographically, it covers

                                                art from the entire Indian

                                                subcontinent, which includes

                                                what is now the countries of

                                                India, Pakistan, Sri Lanka,

                                                Bangladesh, Nepal, Bhutan and

                                                the eastern portion of

                                                Afghanistan.

                                            </p>

                                            <a href="#" class="testimonials-btn">Discover More</a>

                                        </div>

                                        <div class="col-lg-5 col-md-5 col-sm-12" style="float: left">

                                            <img style="

                                                    width: 100%;

                                                    margin-top: 20px;

                                                " src="{{ asset('img/pages/home/horses.jpg') }}" alt="Stars paintings" />

                                        </div>

                                    </div>

                                </div>

                                <!-- row end -->

                            </div>

                            <!-- Postmodern Art end -->



                            <!-- Postmodern Art Slide -->

                            <div class="swiper-slide slider-slide">

                                <!-- row start -->

                                <div class="row justify-content-center">

                                    <div class="testimonials-item">

                                        <div class="col-lg-7 col-md-7 col-sm-12" style="

                                                float: left;

                                                margin-top: 60px;

                                            ">

                                            <h3 class="text-white custom-heading" style="

                                                    line-height: 47px !important;

                                                ">

                                                Islamic Art

                                            </h3>

                                            <p data-animation-child

                                                class="testimonials-comment text-white text-center slide-up delay-2 custom-slide"

                                                data-animation="slide-up">

                                                Islamic art encomasses all

                                                visual arts produced by

                                                culturally Islamic populations,

                                                ranging from architecture,

                                                calligraphy, glass, pottery and

                                                textile arts. One of the most

                                                distinctive features of Islamic

                                                art is the use of arabesque,

                                                which is a repetitive, stylized

                                                form of artistic decoration that

                                                relies on rhythmic linear

                                                patterns of interlacing tendrils

                                                or foliage. Arabesque is often

                                                used to symbolize the

                                                transcendent, indivisible and

                                                infinite nature of God.

                                            </p>

                                            <a href="#" class="testimonials-btn">Discover More</a>

                                        </div>

                                        <div class="col-lg-5 col-md-5 col-sm-12" style="float: left">

                                            <img style="

                                                    width: 100%;

                                                    margin-top: 20px;

                                                " src="{{ asset('img/pages/home/indian-arts.jpg') }}" alt="Stars paintings" />

                                        </div>

                                    </div>

                                </div>

                                <!-- row end -->

                            </div>

                            <!-- Postmodern Art end -->

                        </div>

                        <!-- swiper-wrapper end -->



                        <!-- pagination start -->

                        <div data-animation-child

                            class="testimonials-pagination pagination pagination-light slide-up delay-4"

                            data-animation="slide-up"></div>

                        <!-- pagination end -->

                    </div>

                    <!-- testimonials-slider end -->

                </div>

                <!-- container end -->

            </div>

        </div>

    </div>

</div>



<!-- Bilal End -->



<!-- Promo Box -->



<section class="section-large" style="

        padding-top: 100px !important;

        background-image: linear-gradient(174deg, #ffffff 52%, #fbf8f1 52%);

    ">

    <!-- container start -->

    <div class="container">

        <!-- row start -->

        <div class="row">

            <div class="col-xl-5 col-lg-5">

                <img src="{{ asset('img/pages/home/masterpiece.jpg') }}" width="100%" style="

                        border: solid 30px #ffffff;

                        box-shadow: rgb(0 0 0 / 10%) 0px 10px 30px 0px;

                    " alt="Masterpiece" />

            </div>

            <div class="col-xl-1 col-lg-1"></div>

            <div class="col-xl-6 col-lg-6">

                <div data-animation-child="" class="section-title section-title-large slide-up slide-anim"

                    data-animation="slide-up" style="margin-top: 80px">

                    <h2 class="text-black">Masterpiece Of The Week</h2>

                    <br />

                    <br />

                    <br />

                    <br />

                    <span style="color: '#b99666'">Prayer of Christ in the Garden of Gethsemane</span>
                </div>

                <p data-animation-child="" class="text-lead text-black slide-up delay-1 slide-anim"
                   data-animation="slide-up" style="line-height: 34px; text-align: left;">
                    <strong>Creator:</strong> Pietro Bernardi (Verona,? - 1623), attr. <br />
                    {{-- <strong>Artist: </strong>  (Treviso, notizie dal 1504 ??? Venezia, 1529) Cristo benedicente<br /> --}}
                    <strong>Medium:</strong> Oil on canvas, 34 x 44 cm <br />
                    <strong>Physical Dimensions:</strong> Con cornice cm 46 x 55 <br />
                    <br />
                    For More Details Email at <a href="mailto:info@majesticarts.com"> <b>info@majesticarts.com</b> </a>
                </p>

                <br />

                <br />

                <br>
                <script type="text/javascript">
                document.getElementById();
                console.log(document.getElementById);

                function vf(
                    document.getElementById();
                );
                </script>

                <br />

                {{-- <a href="#" class="detail-btn">View Details</a> --}}

            </div>

        </div>

    </div>

</section>



<!-- Promo Box -->



<!-- Info Boxes 




<section class="section-large" style="padding-top: 100px !important; background: #fbf8f1">
 
    <div class="container">
 

        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div data-animation-container="" class="section-title section-title-medium animated">
 
                    <h2 data-animation-child="" style="text-align: center; width: 100%;" class="text-black bg-reveal-light cover-right delay-1 cover-right-anim" data-animation="cover-right"> <span>Visit Virtual Art Gallery</span> </h2>

                </div>
            </div>
            
            
            <div class="col-xl-12 col-lg-12">
                <iframe src="https://qane.com/3d/index.htm" style="width: 100%; height: 500px; border:none; opacity: 1; border-radius: 15px;" title="Majestic Arts"></iframe> 
            </div>
             
  
            
        </div>
    
    </div>
    
</section>

-->



<section class="section-large" style="padding-top: 100px !important; background: #fbf8f1">

    <!-- container start -->

    <div class="container">

        <!-- row start -->

        <div class="row">

            <div class="col-xl-6 col-lg-6">

                <span class="borderd-box">

                    <h4>Scientific authentication of works of art</h4>

                    <p>

                        Majestic Art provides the best scientific authentication

                        of works of art...

                    </p>

                </span>

            </div>

            <div class="col-xl-6 col-lg-6">

                <span class="borderd-box">

                    <h4>Restoration of pieces</h4>

                    <p>

                        Majestic Art also serves to restore different pieces of

                        art...

                    </p>

                </span>

            </div>

            <div class="col-xl-6 col-lg-6">

                <span class="borderd-box">

                    <h4>Evaluation of works of art</h4>

                    <p>

                        The services of Majestic Arts are limited to the

                        restoration of arts...

                    </p>

                </span>

            </div>

            <div class="col-xl-6 col-lg-6">

                <span class="borderd-box">

                    <h4>Locating Masterpieces</h4>

                    <p>

                        A masterpiece is a formation in any region of different

                        arts blessed with...

                    </p>

                </span>

            </div>



            <a href="{{ route('services') }}" class="fancy-butn icon-arrow-right">Discover More Services</a>

        </div>

    </div>

</section>



<!-- Info Boxes -->



<!-- section start -->

<section id="secdd" class="section-large" style="

        padding-top: 100px !important;

        background:  #fbf8f1;

    ">

    <!-- container start -->

    <div data-animation-container class="container">

        <!-- row start -->

        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-6 col-sm-12 last-sec">

                <div data-animation-child class="section-title section-title-large slide-up port_img"

                    style="transform: perspective(1500px)" data-animation="slide-up">

                    <a href="{{ route('events') }}">

                        <div class="info-pages-box">

                            <strong>EXHIBITION</strong>

                        </div>

                        <img src="{{ asset('img/pages/home/l1.jpg') }}" alt="Stars paintings" />

                    </a>

                </div>

            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 last-sec">

                <div data-animation-child class="section-title section-title-large slide-up delay-8 port_img"

                    style="transform: perspective(1500px)" data-animation="slide-up">

                    <a href="{{ route('collection') }}">

                        <div class="info-pages-box">

                            <strong>COLLECTION</strong>

                        </div>

                        <img src="{{ asset('img/pages/home/l2.jpg') }}" alt="Stars paintings" />

                    </a>

                </div>

            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 last-sec">

                <div data-animation-child class="section-title section-title-large slide-up port_img"

                    style="transform: perspective(1500px)" data-animation="slide-up">

                    <a href="{{ route('contact') }}">

                        <div class="info-pages-box">

                            <strong>BOOK A TOUR</strong>

                        </div>

                        <img src="{{ asset('img/pages/home/l3.jpg') }}" alt="Stars paintings" />

                    </a>

                </div>

            </div>



            <div class="col-lg-6 col-md-6 col-sm-12 last-sec">

                <div data-animation-child class="section-title section-title-large slide-up delay-8 port_img"

                    style="transform: perspective(1500px)" data-animation="slide-up">

                    <a href="#">

                        <div class="info-pages-box">

                            <strong>MESSAGE FROM CEO</strong>

                        </div>

                        <img src="{{ asset('img/pages/home/l4.jpg') }}" alt="Stars paintings" />

                    </a>

                </div>

            </div>

        </div>

        <!-- row end -->

    </div>

    <!-- container end -->

</section>

<!-- section end -->



@if($posts->count() === 3)

<section class="section-large" style="

       background:  #fbf8f1;

    ">

    <div class="container">

        <!-- row start -->

        <div class="row justify-content-center">

            <div class="col-12">

                <div data-animation-container class="section-title section-title-small text-center">

                    <h2 data-animation-child class="text-black slide-up delay-1" data-animation="slide-up">

                        our latest news

                    </h2>

                    <p class="text-black" style="font-size: 15px">

                        The world's greatest arts and antiques collection

                    </p>

                </div>

            </div>

        </div>

        <!-- row end -->



        <!-- card-group start -->

        <div class="card-group">

            <!-- row start -->

            <div class="row justify-content-center">

                @foreach ($posts as $post)

                    <div class="col-lg-4 col-md-6 col-sm-8">

                        <div data-animation-container class="blog-card-outer">

                            <div class="blog-card">

                                <a data-animation-child data-swup href="{{ route('article', $post->slug) }}"

                                    class="cursor-color">

                                    <div class="lazy" data-bg="">

                                        <img height="300" src="{{ asset('/img/event/' . $post->image) }}" />

                                    </div>

                                </a>

                                <div class="blog-card-content">

                                    <div data-animation-child class="slide-up delay-8" data-animation="slide-up">

                                        <h3 class="blog-card-title text-black">

                                            <a class="text-black" data-swup

                                                href="{{ route('article', $post->slug) }}">

                                                {{ $post->title }} <br />

                                                {{-- <h5 span style="color: #b99667">

                                                    {{ $post->created_at }}

                                                </h5> --}}

                                            </a>

                                        </h3>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

            <!-- row end -->

        </div>

        <!-- card-group end -->

    </div>

    <!-- container end -->

</section>

<!-- section end -->

@endif



<section class="section-large" style="background-color: #fbf6f1">

    <div class="container">

        <!-- row start -->

        <div class="row justify-content-center">

            <div class="col-lg-12">

                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12">

                        <h4 class="text-black" style="font-size: 35px; margin-bottom: 35px">

                            SUBSCRIBE OUR NEWSLETTER

                        </h4>

                    </div>

                    <form action="{{ route('subscribe') }}" method="POST"

                        class="form-group col-lg-6 col-md-6 col-sm-12">

                        @csrf

                        <input type="email" name="email" class="form-control" autocomplete="off" placeholder="Your Email Address" />

                        <button style="float: right; border: none">

                            <img src="{{ asset('img/assets/singnup-button.png') }}" style="float: right; margin-top: -25px" />

                        </button>

                    </form>

                </div>

            </div>

        </div>

        <!-- row end -->

    </div>

</section>

@endsection

@push('scripts')

<script>

    // document.querySelector('.button-7').addEventListener('click', function () {

    //     document.querySelector('.popup').style.display = 'none';

    // })

</script>

@endpush