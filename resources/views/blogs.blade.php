<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FontAwesome -->
    
     <title>The Majestic Arts News</title>
     <meta name="description" content="The Majestic Arts"/>
     <meta name="Keywords" content="The Majestic Arts news will give incomming art and art gallery updates in Dubai.">
     <meta name='robots' content='index,follow' />
     <link rel="canonical" href="https://majesticarts.com/News" />


@include('header')

@include('navigation')

<!-- blog page intro start -->
<section id="firstSection"  class="page-header section-80vh bg-gradient-black bg-black blog-top-bg" style="background: url({{url('/public/img/newslatter.jpg')}}); background-size: 100%; margin-top:115px; background-repeat: no-repeat;">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            <!-- <div class="col-xl-7 offset-xl-1">
                <div class="breadcrumb-wrap">
                    <ul class="breadcrumb slide-over">
                        <li class="breadcrumb-item"><a class="link text-white" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Events</li>
                    </ul>
                </div>
            </div> -->
            <div class="col-xl-11 offset-xl-1">
                <h1 class="page-header-title text-white">
                    <span class="slide-over">News/Articles</span>
                </h1>
            </div>
            <div class="col-xl-7 offset-xl-1">
                <p class='page-header-text text-lead text-white'>
                    <span class="slide-over"></span>
                </p>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->

    <!-- bottom-left-links start -->
    <div class="bottom-left-links">
        <div>
            <a href="#" class="link text-white">Behance</a>
        </div>
        <div>
            <a href="#" class="link text-white">FaceBook</a>
        </div>
        <div>
            <a href="#" class="link text-white">Twitter</a>
        </div>
    </div>
    <!-- bottom-left-links end -->
</section>
<!-- blog page intro end -->


<!-- blog page main start -->
<div class="page-main">

    <!-- section start -->
    <section class="section-small bg-light">
        <!-- container start -->
        <div class="container blog-container">
            <!-- row start -->
            <div class="row"    style="background: #fbf8f1; padding: 0px 30px;">


                <!-- posts start -->
                <div class="col-lg-12">
                    <!-- blog-item start -->
                    <?php
                    if (count($records) > 0) {
                        ?>
                        @foreach($records as $record)
                        <div data-animation-container class="blog-item">
                            <!-- <a data-animation-child data-swup href="{{url('blog/'.$record->slug)}}" class=" blog-img-hover cover-right" data-animation="cover-right">
                                <div class="bg-image lazy"> <img width="100%" height="80%" src="{{ asset('public/event/'.$record->image) }}"></div>
                            </a> -->
                            <!-- blog-content start -->
                            <div class="blog-content">
                                <!--<div data-animation-child class="blog-header slide-right"  data-animation="slide-right">
                                    <div class="blog-info">
                                        <p class="text-additional text-black">
                                            <a href="#" class="link"><?php echo date("M d, Y", strtotime($record->created_at)); ?></a>
                                            -
                                            <a href="#" class="link">{{$record->title}}</a>
                                        </p>
                                    </div>
                                </div>-->
                                <h3 data-animation-child class="blog-title slide-up delay-8" data-animation="slide-up">
                                    <a class="link  text-black-color" data-swup href="{{url('blog/'.$record->slug)}}">{{$record->title}}</a>
                                </h3>
                                <p data-animation-child class="blog-text text-black-color slide-up delay-9" data-animation="slide-up">
                                    {{$record->excerpt}}...
                                </p>
                            </div>
                            @endforeach
                            <!-- blog-content end -->
                        </div>
                        <?php
                    } else {
                        echo "<h2 style='color:red;'>No Post Found!</h2>";
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


<script>


    
</script>