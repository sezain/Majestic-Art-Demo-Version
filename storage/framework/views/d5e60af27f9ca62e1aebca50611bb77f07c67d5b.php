<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- section start -->
<section class="page-header bg-black over-normal">
    <!-- title wrapper start -->
    <div id="firstSection" class="section-large blog-top-bg">
        <!-- container start -->
        <div class="container">

            <!-- row start -->
            <div class="row">
                <div class="col-lg-9">
                    <div class="section-title section-title-medium">
                        <h2 class="page-header-title text-white">
                            <span class="slide-over">our latest works</span>
                        </h2>
                        <p class="page-header-text text-lead text-white">
                            <span class="slide-over">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Blandit volutpat maecenas volutpat blandit erat velit.
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            <!-- row end -->

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
            <!-- row start -->
            <div class="row">
                <?php
                if (count($records) > 0) {
                    foreach ($records as $record) {
                        ?>
                        <div data-animation-container class="col-md-6">
                            <a class="portfolio-item portfolio-item-left" data-swup href="<?php echo e(url('art/'.$record->slug)); ?>">
                                <div data-animation-child class="portfolio-img bg-reveal-light cover-right" data-animation="cover-right">
                                    <div class="bg-image lazy" data-bg="url(<?php echo e(asset('public/arts/'.$record->image)); ?>)"></div>
                                </div>
                                <div data-animation-child class="portfolio-info slide-right delay-7" data-animation="slide-right">
                                    <span class="text-additional"><?php echo e($record->name); ?></span>
                                    <h2 class="text-white"><?php echo e($record->title); ?></h2>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    echo "<h2 style='color:#ffffff;'>No Post Found!</h2>";
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
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/majesud3/public_html/majesticarts/resources/views/art-posts.blade.php ENDPATH**/ ?>