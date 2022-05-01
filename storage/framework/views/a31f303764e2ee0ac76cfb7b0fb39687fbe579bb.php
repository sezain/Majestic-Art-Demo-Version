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

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- blog page intro start -->
<section id="firstSection" class="page-header section-80vh">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row">
            
            <div class="col-xl-12 offset-xl-1">
                <h1 class="page-header-title text-white">
                    <span class="slide-over">Events</span>
                </h1>
            </div>
            <div class="col-xl-12 offset-xl-1">
                <p class='page-header-text text-lead text-white'>
                    <span class="slide-over">Due to the current worldwide situation of COVID-19 all events has been postponed until further notice.</span>
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
                        <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div data-animation-container class="blog-item bg-black">
                            <a data-animation-child data-swup href="<?php echo e(url('events/'.$record->slug)); ?>" class="blog-img blog-img-hover cover-right" data-animation="cover-right">
                                <div class="bg-image lazy" data-bg="url(<?php echo e(asset('public/event/'.$record->image)); ?>)"></div>
                            </a>
                            <!-- blog-content start -->
                            <div class="blog-content">
                                <div data-animation-child class="blog-header slide-right"  data-animation="slide-right">
                                    <div class="blog-info">
                                        <p class="text-additional text-white">
                                            <a href="#" class="link"><?php echo date("M d, Y", strtotime($record->created_at)); ?></a>
                                            -
                                            <a href="#" class="link"><?php echo e($record->title); ?></a>
                                        </p>
                                    </div>
                                </div>
                                <h3 data-animation-child class="blog-title slide-up delay-8" data-animation="slide-up">
                                    <a class="link" data-swup href="<?php echo e(url('events/'.$record->slug)); ?>"><?php echo e($record->title); ?></a>
                                </h3>
                                <p data-animation-child class="blog-text text-light-gray slide-up delay-9" data-animation="slide-up">
                                    <?php echo e($record->excerpt); ?>...
                                </p>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/majesud3/public_html/majesticarts/resources/views/events.blade.php ENDPATH**/ ?>