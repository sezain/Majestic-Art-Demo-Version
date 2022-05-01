@include('header')
@include('navigation')

<!-- blog Article page intro start -->
<section id="firstSection" class="page-header section-80vh bg-gradient-black bg-black blog-top-bg">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            <div class="col-xl-7 offset-xl-1">
                <div class="breadcrumb-wrap">
                    <ul class="breadcrumb slide-over">
                        <li class="breadcrumb-item"><a class="link text-black" href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a class="link text-black" href="{{url('exhibitions')}}">Exhibition</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Exhibition Article</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-11 offset-xl-1">
                <h1 class="page-header-title text-black">
                    <span class="slide-over">Exhibition article</span>
                </h1>
            </div>
            <div class="col-xl-7 offset-xl-1">
                <p class='page-header-text text-lead text-black'>
                    <span class="slide-over">This an introduction text. There are many variations of passages of Lorem Ipsum available, but the majority have always free from rep - etition</span>
                </p>
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- container end -->

    <!-- bottom-left-links start -->
    <div class="bottom-left-links">
        <div>
            <a href="#" class="link text-white">Instagram</a>
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
<!-- blog Article page intro end -->


<!-- blog Article page main start -->
<div class="page-main">

    <!-- section start -->
    <section class="section-small bg-light">

        <!-- container start -->
        <div class="container blog-container">
            <!-- row start -->
            <div class="row">
                @foreach($records as $record)
                <div class="col-lg-12">
                    <!-- blog-item start -->
                    <div class="blog-item bg-black2">
                        <div class="blog-img">
                            <div class="bg-image lazy" data-bg="url({{ asset('public/event/'.$record->image) }})"></div>
                        </div>
                        <!-- blog-content start -->
                        <div class="blog-content">
                            <div class="blog-header">
                                <div class="blog-info">
                                    <p class="text-additional text-black">
                                        <a href="#" class="link"><?php echo date("M d, Y", strtotime($record->created_at)); ?></a>
                                        -
                                        <a href="#" class="link">Exhibition</a>
                                    </p>
                                </div>
                               
                            </div>
                            
                            <h3 class="blog-title text-black">{{$record->title}}</h3>
                            <p>&nbsp;</p>
                            <?php echo html_entity_decode($record->body, ENT_QUOTES | ENT_XML1, 'UTF-8'); ?>
                            
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