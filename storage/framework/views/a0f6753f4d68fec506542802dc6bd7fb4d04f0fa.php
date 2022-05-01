<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- blog Article page intro start -->
<section id="firstSection" class="page-header section-80vh bg-gradient-black bg-black blog-top-bg">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            <div class="col-xl-7 offset-xl-1">
                <div class="breadcrumb-wrap">
                    <ul class="breadcrumb slide-over">
                        <li class="breadcrumb-item"><a class="link text-white" href="<?php echo e(url('/')); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a class="link text-white" href="<?php echo e(url('events')); ?>">Event</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Event Article</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-11 offset-xl-1">
                <h1 class="page-header-title text-white">
                    <span class="slide-over">Event article</span>
                </h1>
            </div>
            <div class="col-xl-7 offset-xl-1">
                <p class='page-header-text text-lead text-white'>
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
        <div class="container blog-container">
            <!-- row start -->
            <div class="row">
                <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12">
                    <!-- blog-item start -->
                    <div class="blog-item bg-black2">
                        <div class="blog-img">
                            <div class="bg-image lazy" data-bg="url(<?php echo e(asset('public/event/'.$record->image)); ?>)"></div>
                        </div>
                        <!-- blog-content start -->
                        <div class="blog-content">
                            <div class="blog-header">
                                <div class="blog-info">
                                    <p class="text-additional text-white">
                                        <a href="#" class="link"><?php echo date("M d, Y", strtotime($record->created_at)); ?></a>
                                        -
                                        <a href="#" class="link">Event</a>
                                    </p>
                                </div>
                               
                            </div>
                            <h3 class="blog-title text-white"><?php echo e($record->title); ?></h3>
<p>&nbsp;</p>
                            <?php echo html_entity_decode($record->body, ENT_QUOTES | ENT_XML1, 'UTF-8'); ?>
                            
                        </div>
                        <!-- blog-content end -->
                    </div>
                    <!-- blog-item end --> 
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </section>
    <!-- section end -->

</div>
<!-- blog Article page main end -->
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/majesud3/public_html/majesticarts/resources/views/events-detail.blade.php ENDPATH**/ ?>