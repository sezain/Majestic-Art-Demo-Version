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



<section class="page-main">
    <div class="section-large">     
        <div data-animation-container class="container">
            {{-- @foreach ($categories as $key => $content) --}}
        
                <div class="row" style="background: #faf8f1; margin-bottom: 30px; padding: 50px 20px;">
                    {{-- <div class="col-lg-12">
                        <div data-animation-child class="section-title section-title-large slide-up" data-animation="slide-up"  style="margin-bottom: 0;">
                            <h3>{{ $key }}:</h3>
                        </div>
                    </div> --}}
                    {{-- @foreach ($content as $artist) --}}
                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/Area-of-​​G.-Busi,-known-as-Cariani-(148590-post-1547).jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Area of ​​Ambrogio da Fossano known as Bergognone (1453-1523)</span>
                                    <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Madonna of the milk</h2> 
                                   {{--  <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Oil on panel, 61 x 47 cm</h2> --}}
                                </div>
                            </span>
                        </div>





                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/Emilian-school,-17th-century.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Emilian school, 17th century
                                    </span>
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Madonna with Child and San Giovannino
                                    </h2> 
                                    {{-- <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Oil on canvas, 51.5 x 66.5 cm, Cornice cm 75 x 59
                                    </h2> --}}

                                </div>
                            </span>
                        </div>




                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/Attr.-to-Girolamo-Sellari-known-as-da-Carpi.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Attr. to Girolamo Sellari, known as da Carpi (Ferrara,1501-1556)
                                    </span>
                                    <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Madonna and Child with Dancing Putti</h2>
                                     {{-- <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Oil on copper, 20 x 14 cm - Temple frame</h2> --}}

                                </div>
                            </span>
                        </div>



                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/Giovanni-Camillo-Sagrestani.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Giovanni Camillo Sagrestani (Florence 1660-1731)
                                    </span>
                                    <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Annunciation
                                    </h2> 
                                    {{-- <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Olio su tela, cm 83 x 71- cornice, cm 114 x 101 - Perizia Prof. Pulini
                                    </h2> --}}

                                </div>
                            </span>
                        </div>



                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/17th-century-Emilian-school.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">17th century, Emilian school
                                    </span>
                                    <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Rest on the flight to Egypt
                                    </h2> 
                                    {{-- <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Oil on canvas, 42 x 33 cm - Oil on canvas, 42 x 33 cm
                                        <h2> --}}

                                </div>
                            </span>
                        </div>



                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/17th-century.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">17th century</span>
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Return from the flight to Egypt </h2> 
                                    {{-- <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Oil on copper, 52.5 x 41.5 cm - Cornice cm 66,5 x 55,5 </h2> --}}

                                </div>
                            </span>
                        </div>




                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/Pietro-Bernardi.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Pietro Bernardi (Verona,? - 1623), attr.</span>
                                    {{-- <span class="text-additional" style="background: #fff; font-weight: bold;"> Expertise Prof. Sava </span> --}}
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Prayer of Christ in the Garden of Gethsemane
                                    </h2> 
                                    {{-- <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Oil on slate, 34 x 44 cm - Con cornice cm 46 x 55 </h2> --}}


                                </div>
                            </span>
                        </div>


                        {{-- <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    
                                    <img src="{{ asset("img/pages/collection/Rocco-Marconi.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Rocco Marconi (Treviso, news from 1504 - Venice, 1529)
                                    </span>
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Blessing Christ
                                    </h2> 
                                </div>
                            </span>
                        </div> --}}


                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/17th-century-.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">17th century
                                    </span>
                                    <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Glory of Saints
                                    </h2> 
                                    {{-- <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Oil on canvas, 66 x 46 cm - with frame 81 x 61 cm</h2> --}}

                                </div>
                            </span>
                        </div>



                        

                        {{-- <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    
                                    <img src="{{ asset("img/pages/collection/Cesare-Fracanzano.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Cesare Fracanzano (Bisceglie, 1605- Barletta, 1651)</span>
                                    <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">The repentance of St. Peter
                                    </h2> 

                                </div>
                            </span>
                        </div> --}}


                        {{-- <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    <img src="{{ asset("img/pages/collection/nineteenth-century.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Nineteenth Century</span>
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Scenes from the life of Napoleon
                                    </h2> 

                                </div>
                            </span>
                        </div> --}}



                        {{-- <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    <img src="{{ asset("img/pages/collection/Giovanni-Battista-Lampi.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Giovanni Battista Lampi (Romanian, 1751 - Vienna, 1830)</span>
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Portrait of Antonio Canova
                                    </h2> 
                                </div>
                            </span>
                        </div> --}}
                        




                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/Pastoral-scene.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Nineteenth Century</span>
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Pastoral scene
                                    </h2> 
                                    {{-- <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Oil on canvas, 66 x 46 cm - with frame 81 x 61 cm</h2> --}}
                                </div>
                            </span>
                        </div>



                        {{-- <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    <img src="{{ asset("img/pages/collection/Madonna-with-Child.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;"> Tuscany, 16th century
                                    </span>
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Madonna with Child
                                    </h2> 
                                </div>
                            </span>
                        </div> --}}




                        {{-- <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    <img src="{{ asset("img/pages/collection/Nursing-virgin.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">XVIII century
                                    </span>
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Nursing virgin
                                    </h2> 
                                </div>
                            </span>
                        </div> --}}



                        <div data-animation-container="" class="col-md-3 animated">
                            <span class="portfolio-item portfolio-item-left port_img tilt" style="transform: perspective(1500px); pointer-events: none; cursor: default;" data-swup="" >
                                <div data-animation-child="" class="portfolio-img bg-reveal-light cover-right cover-right-anim" data-animation="cover-right">
                                </div>
                                <div data-animation-child="" class="portfolio-info slide-right delay-7 slide-anim" data-animation="slide-right">
                                    {{-- <img src="" alt="collections"> --}}
                                    <img src="{{ asset("img/pages/collection/Venus-Italica.jpg") }}" width="300" height="400" alt="collections">
                                    <span class="text-additional" style="background: #fff; font-weight: bold;">Nineteenth Century
                                    </span>
                                     <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Venus Italica
                                    </h2> 
                                    {{-- <h2 class="text-black" style="padding: 5px 10px; font-size: 30px;">Oil on canvas, 66 x 46 cm - with frame 81 x 61 cm</h2> --}}
                                </div>
                            </span>
                        </div>

                    {{-- @endforeach --}}
                </div>

            {{-- @endforeach --}}
        </div>
    </div>
</section>






<!-- about page main start -->
<section class="page-main">
    <div class="section-large">     
        <div data-animation-container class="container">
            @foreach ($categories as $key => $content)
        
                <div class="row" style="background: #faf8f1; margin-bottom: 30px; padding: 50px 20px;">
                    <div class="col-lg-12">
                        <div data-animation-child class="section-title section-title-large slide-up" data-animation="slide-up"  style="margin-bottom: 0;">
                            <h3>{{ $key }}:</h3>
                        </div>
                    </div>
                    @foreach ($content as $artist)
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

            @endforeach
        </div>
    </div>
</section>
@endsection
