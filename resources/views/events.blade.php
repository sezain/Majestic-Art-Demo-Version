<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FontAwesome -->
    
     <title>The Majestic Arts Events</title>
     <meta name="description" content="The Majestic Arts Events"/>
     <meta name="Keywords" content="The Majestic Arts Events">
     <meta name='robots' content='noindex,follow' />
     <link rel="canonical" href="https://majesticarts.com/events" />

@include('header')
@include('navigation')

<!-- blog page intro start -->
<section id="firstSection" class="page-header section-80vh">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            
            <div class="col-xl-12 offset-xl-1">
                <h1 class="page-header-title text-black">
                    <span class="slide-over">Events</span>
                </h1>
            </div>
            <br> <br> <br/> <br/> <br/>
            <div class="col-xl-12 offset-xl-1">
                <p class='page-header-text text-lead text-black'>
                    <span class="slide-over">Coming Soon please wait until further notice.</span>
                </p>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->

</section>
<!-- blog page intro end -->


<!-- blog page main start -->
<div class="page-main">

    <!-- section start -->
    <section class="section-small">
        <!-- container start -->
        <div class="container blog-container">
            <!-- row start -->
            <div class="row">

                <!-- posts start -->
                <div class="col-lg-12">
                    <!-- blog-item start -->
                    <?php
                    if (count($records) > 0) {
                        ?>
                        @foreach($records as $record)
                        <div data-animation-container class="blog-item bg-black">
                            <a data-animation-child data-swup href="{{url('events/'.$record->slug)}}" class="blog-img blog-img-hover cover-right" data-animation="cover-right">
                                <div class="bg-image lazy" data-bg="url({{ asset('public/event/'.$record->image) }})"></div>
                            </a>
                            <!-- blog-content start -->
                            <div class="blog-content">
                                <div data-animation-child class="blog-header slide-right"  data-animation="slide-right">
                                    <div class="blog-info">
                                        <p class="text-additional text-black">
                                            <a href="#" class="link"><?php echo date("M d, Y", strtotime($record->created_at)); ?></a>
                                            -
                                            <a href="#" class="link">{{$record->title}}</a>
                                        </p>
                                    </div>
                                </div>
                                <h3 data-animation-child class="blog-title slide-up delay-8" data-animation="slide-up">
                                    <a class="link" data-swup href="{{url('events/'.$record->slug)}}">{{$record->title}}</a>
                                </h3>
                                <p data-animation-child class="blog-text text-light-gray slide-up delay-9" data-animation="slide-up">
                                    {{$record->excerpt}}...
                                </p>
                            </div>
                            @endforeach
                            <!-- blog-content end -->
                        </div>
                        <?php
                    } else {
                        echo "<h2 style='color:red; opacity: 0;'>No Post Found!</h2>";
                    }
                    ?>
                    <!-- blog-item end -->
                </div>
                <!-- posts end -->


              

            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->

</div>
<!-- blog page main end -->
@include('footer')