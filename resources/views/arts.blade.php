<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FontAwesome -->
    
     <title>The Majestic Arts </title>
     <meta name="description" content=""/>
     <meta name="Keywords" content="">
     <meta name='robots' content='noindex,follow' />
     <link rel="canonical" href="https://majesticarts.com/modern-art" />

@include('header')

@include('navigation')

<!-- section start -->
<section class="page-header bg-black over-normal">
    <!-- title wrapper start -->
    <div id="firstSection" class="section-large blog-top-bg"  <?php if($category->background !='' ){ ?> style="background:url({{ asset('public/category/'.$category->background) }}) <?php } ?>">
        <!-- container start -->
        <div class="container" style="margin-top: 140px;">
             
             <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-title-medium">
                        <h2 class="page-header-title text-black">
                            <span class="slide-over">{{$category->name}}</span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </div>
    <!-- title wrapper end -->


    <!-- portfolio start -->
    <div class="portfolio">
         
        <!-- container start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-title-medium">
                       <p class="page-header-text text-lead text-black">
                            <span class="slide-over">
                               {{$category->description}} 
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- row end -->
            <!-- row start -->
            <div class="row">
                <!-- row start -->
                <?php
                if (count($records) > 0) {
                    foreach ($records as $record) {
                        ?>
                        <div data-animation-container class="col-md-4">
                            <a class="portfolio-item portfolio-item-left" data-swup href="{{url('art/'.$record->slug)}}">
                                <div data-animation-child class="portfolio-img bg-reveal-light cover-right" data-animation="cover-right">
                                    <div class="bg-image lazy" data-bg="url({{ asset('public/arts/'.$record->image) }})"></div>
                                </div>
                                <div data-animation-child class="portfolio-info slide-right delay-7" data-animation="slide-right">
                                    <span class="text-additional">{{$category->name}}</span>
                                    <h2 class="text-black">{{$record->title}}</h2>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    echo "<h2 style='color:#ffffff; text-align: center; width: 100%; margin-top: 50px;'>Posts Are Coming Soon!</h2>";
                }
                ?>

            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>
    <!-- portfolio end -->
</section>
<!-- section end -->
@include('footer')