
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FontAwesome -->
    
     <title>The Majestic Arts Blog</title>
     <meta name="description" content="The Majestic Arts Blog"/>
     <meta name="Keywords" content="The Majestic Arts blog will give incomming art and art gallery updates in Dubai.">
     <meta name='robots' content='index,follow' />
     <link rel="canonical" href="https://majesticarts.com/blog" />@include('header')
@include('navigation')

<!-- blog Article page intro start -->
<section id="firstSection" class="page-header section-80vh bg-gradient-black bg-black blog-top-bg">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
       <div class="row text-center">
            <div class="col-xl-12 text-center">
                <div class="breadcrumb-wrap">
                    <ul class="breadcrumb slide-over">
                        <li class="breadcrumb-item"><a class="link text-white" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ul>
                </div>
            </div>
            
           
        </div> -->
        <!-- row  end -->
    </div>
    <!-- container end -->

    <!-- bottom-left-links start -->
   <!--  <div class="bottom-left-links">
        <div>
            <a href="#" class="link text-white">Instagram</a>
        </div>
        <div>
            <a href="#" class="link text-white">FaceBook</a>
        </div>
        <div>
            <a href="#" class="link text-white">Twitter</a>
        </div>
    </div> -->
    <!-- bottom-left-links end -->
</section>
<!-- blog Article page intro end -->


<!-- blog Article page main start -->
<div class="page-main">

    <!-- section start -->
    <section class="section-small bg-light dark-sky">



        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div id='title'>
            <span>
                .
            </span>
        </div>



        <!-- container start -->
        <div class=" ">
            <!-- row start -->
            <div class="row">
                @foreach($records as $record)
                <div class="col-lg-12">
                    <!-- blog-item start -->
                    <div class="blog-item bg-black2">
                        <div class="blog-img">
                            <div class=" lazy" data-bg=""><img src="{{ asset('public/event/'.$record->image) }}"></div>
                        </div>
                        <!-- blog-content start -->
                        <div class="blog-content">
                            <div class="blog-header">
                                <div class="blog-info">
                                    <p class="text-additional text-white">
                                        <a href="#" class="link"><?php echo date("M d, Y", strtotime($record->created_at)); ?></a>
                                        
                                        <!-- <a href="#" class="link">Event</a> -->
                                    </p>
                                </div>
                               
                            </div>
                            <h3 class="blog-title text-white">{{$record->title}}</h3>
<p><?php echo html_entity_decode($record->body, ENT_QUOTES | ENT_XML1, 'UTF-8'); ?></p>
                            
                            
                        </div>
                        <!-- blog-content end -->
                    </div>
                    <!-- blog-item end --> 
                </div>
                @endforeach

            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->

</div>
<!-- blog Article page main end -->
@include('footer')