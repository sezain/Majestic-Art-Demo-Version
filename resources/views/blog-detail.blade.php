
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FontAwesome -->
    @foreach($records as $record)
        <title>{{$record->title}}</title>
        <meta name="description" content="{{$record->description_content}}"/>
        <meta name="Keywords" content="{{$record->keywords_content}}">
        <meta name='robots' content='index,follow' />
        <link rel="canonical" href="https://majesticarts.com/blog/{{$record->slug}}" />
        @include('header')
    @endforeach
@include('navigation')

<!-- blog Article page intro start -->
<section id="firstSection" class="page-header section-80vh bg-gradient-black bg-black blog-top-bg">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
       <div class="row text-center">
            <div class="col-xl-12 text-center">
                <h1 class="blog-title text-white">{{$records[0]->title}}</h1>
            </div>
            
           
        </div> -->
        <!-- row  end -->
    </div>
    <!-- container end -->

    <!-- bottom-left-links start -->
   <!--  <div class="bottom-left-links">
        <div>
            <a href="#" class="link text-black">Instagram</a>
        </div>
        <div>
            <a href="#" class="link text-black">FaceBook</a>
        </div>
        <div>
            <a href="#" class="link text-black">Twitter</a>
        </div>
    </div> -->
    <!-- bottom-left-links end -->
</section>
<!-- blog Article page intro end -->


<!-- blog Article page main start -->
<div class="page-main">

    <!-- section start -->
    <section class="section-small bg-light">
 
        <!-- container start -->
        <div class="container"  data-animation-container class="container" style="background: #fbf8f1; padding: 50px 30px;>
            <!-- row start -->
            <div class="row">
                @foreach($records as $record)
                <div class="col-lg-12">
                    <!-- blog-item start -->
                    <div class="blog-item bg-black2">
                        <div align="center">
                            <div class=" lazy" data-bg=""><img width="60%" height="80%" src="{{ asset('public/event/'.$record->image) }}"></div>
                        </div>
                        <!-- blog-content start -->
                        <div class="blog-content">
                            <div class="blog-header">
                                <div class="blog-info">
                                    <p class="text-additional text-black-color">
                                        <a href="#" class="link"><?php echo date("M d, Y", strtotime($record->created_at)); ?></a>
                                        
                                        <!-- <a href="#" class="link">Event</a> -->
                                    </p>
                                </div>
                               
                            </div>
                            
<p class="blog-text text-black-color"><?php echo html_entity_decode($record->body, ENT_QUOTES | ENT_XML1, 'UTF-8'); ?></p>
                            
                            
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