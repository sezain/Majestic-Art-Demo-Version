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

<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- section start -->
<section class="page-header bg-black over-normal">
    <!-- title wrapper start -->
    <div id="firstSection" class="section-large blog-top-bg"  <?php if($category->background !='' ){ ?> style="background:url(<?php echo e(asset('public/category/'.$category->background)); ?>) <?php } ?>">
        <!-- container start -->
        <div class="container" style="margin-top: 140px;">
             
             <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-title-medium">
                        <h2 class="page-header-title text-white">
                            <span class="slide-over"><?php echo e($category->name); ?></span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- container end -->
    </div>
    <!-- title wrapper end -->


    <!-- portfolio start -->
    <div class="portfolio dark-sky">
        <div id='stars'></div>
        <div id='stars2'></div>
        <div id='stars3'></div>
        <div id='title'>
            <span>
                .
            </span>
        </div>
        <!-- container start -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title section-title-medium">
                       <p class="page-header-text text-lead text-white">
                            <span class="slide-over">
                               <?php echo e($category->description); ?> 
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
                            <a class="portfolio-item portfolio-item-left" data-swup href="<?php echo e(url('art/'.$record->slug)); ?>">
                                <div data-animation-child class="portfolio-img bg-reveal-light cover-right" data-animation="cover-right">
                                    <div class="bg-image lazy" data-bg="url(<?php echo e(asset('public/arts/'.$record->image)); ?>)"></div>
                                </div>
                                <div data-animation-child class="portfolio-info slide-right delay-7" data-animation="slide-right">
                                    <span class="text-additional"><?php echo e($category->name); ?></span>
                                    <h2 class="text-white"><?php echo e($record->title); ?></h2>
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
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/majesud3/public_html/majesticarts/resources/views/arts.blade.php ENDPATH**/ ?>