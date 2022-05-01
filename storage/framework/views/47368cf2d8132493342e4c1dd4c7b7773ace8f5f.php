    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<!-- portfolio header start -->
<section id="firstSection" class="work-header work-header-reveal section-img-100vh">
    <div class="bg-fixed overlay-black bg-image lazy" data-bg="url(<?php echo e(url('/')); ?>/public/img/portfolio-page/Header/1.jpg)">
        <div class="work-header-content">
            <h2 class="work-header-title text-white">
                <span class="slide-over"><?php echo e($record->title); ?></span>
            </h2>
            <p class="work-header-text text-additional text-white">
                <span class="slide-over"><?php echo e($record->name); ?></span>
            </p>
        </div>
    </div>
</section>
<!-- portfolio header end -->


<!-- section start -->
<section class="section-large section-80vh bg-black">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div data-animation-container class="row">

            <div class="col-12">
                <div class="work-content sm-center">
                    <h2 data-animation-child class="work-title text-white slide-up" data-animation="slide-up">
                        Overview
                    </h2>
                    <p data-animation-child class="work-text text-light-gray slide-up delay-1" data-animation="slide-up">
                        <?php echo e($record->excerpt); ?>

                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="work-info">
                    <h3 data-animation-child class="text-white slide-up delay-2" data-animation="slide-up">
                        By
                    </h3>
                    <p data-animation-child class="work-text text-light-gray slide-up delay-3" data-animation="slide-up">
                        <?php echo e($record->person); ?>

                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="work-info">
                    <h3 data-animation-child class="text-white slide-up delay-2" data-animation="slide-up">
                        Location
                    </h3>
                    <p data-animation-child class="work-text text-light-gray slide-up delay-3" data-animation="slide-up">
                        <?php echo e($record->location); ?>

                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="work-info">
                    <h3 data-animation-child class="text-white slide-up delay-2" data-animation="slide-up">
                        Discover
                    </h3>
                    <p data-animation-child class="work-text text-light-gray slide-up delay-3" data-animation="slide-up">
                        <?php echo e($record->discover); ?>

                    </p>
                </div>
            </div>

        </div>
        <!-- row end -->
    </div>
    <!-- container end -->
</section>
<!-- section end -->


<!-- img start -->
<div class="section-img-85vh bg-black">
    <div class="bg-image lazy bg-fixed" data-bg="url(<?php echo e(url('/')); ?>/public/img/portfolio-page/Wide/1.jpg)"></div>
</div>
<!-- img end -->


<!-- section start -->
<section class="section-large bg-light">
    <!-- container start -->
    <div class="container">

        <!-- row start -->
        <div data-animation-container class="row">
            <div class="col-xl-6 col-lg-8">
                <div class="work-content">
                    <h2 data-animation-child class="work-title slide-up" data-animation="slide-up">
                        <?php echo e($record->title); ?>

                    </h2>
                </div>
            </div>

            <div class="w-100"></div>

            <div class="col-lg-12">
                <p data-animation-child class="work-text slide-up delay-1" data-animation="slide-up">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley of type and.
                </p>
            </div>

        </div>
        <!-- row end -->


        <!-- work-img start -->
        <div class="work-img-section">
            <!-- row start -->

            <div class="row justify-content-center">
                <?php
                $gallery = json_decode($record->gallery);
                if (count($gallery) > 0) {
                    foreach ($gallery as $gallery) {
                        ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="work-img-long bg-gray cover-down" data-animation="cover-down">
                                <div class="bg-image lazy" data-bg="url(<?php echo e(asset('public/arts/'.$gallery)); ?>)"></div>
                            </div>
                        </div>
                    <?php 
                    
                    }
                }
                ?>
            </div>
            <!-- row end -->
        </div>
        <!-- work-img end -->

    </div>
    <!-- container end -->
</section>
<!-- section end -->


<!-- video start -->
<div class="section-img-100vh bg-black overlay-black">
    <div class="bg-image lazy" data-bg="url(<?php echo e(url('/')); ?>/public/img/portfolio-page/Video/1.jpg)">

        <!-- video start -->
        <div class="video">
            <button class="video-link text-white">
                <i class="icon-triangle"></i>
            </button>
            <div class="video-inner">
                <iframe src="<?php echo e($record->video); ?>"></iframe>
            </div>
        </div>
        <!-- video end -->

    </div>
</div>
<!-- video end -->


<!-- section start -->
<section class="section-large bg-light">
    <!-- container start -->
    <div class="container">

        <!-- row start -->
        <div data-animation-container class="row">
            <div class="col-lg-10 col-md-8 col-sm-10">
                <div class="work-content">
                    <h2 data-animation-child class="work-title slide-up" data-animation="slide-up">
                        More Details Photos About Item.
                    </h2>
                </div>
            </div>

            <div class="col-lg-10">
                <p data-animation-child class="work-text slide-up delay-1" data-animation="slide-up">
                    <?php echo e($record->body); ?>

                </p>
            </div>
        </div>
        <!-- row end -->

        <!-- work-img start -->
        <div class="work-img-section">
            <!-- row start -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="work-img-wide bg-gray cover-down" data-animation="cover-down">
                        <div class="bg-image lazy" data-bg="url(<?php echo e(asset('public/arts/'.$record->image)); ?>)"></div>
                    </div>
                </div>
                <?php
                $gallery = json_decode($record->gallery);
                if (count($gallery) > 0) {
                    foreach ($gallery as $gallery) {
                        ?>
                        <div class="col-lg-6 mt-30">
                            <div class="work-img-square bg-gray cover-down delay-2" data-animation="cover-down">
                                <div class="bg-image lazy" data-bg="url(<?php echo e(asset('public/arts/'.$gallery)); ?>)"></div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>


            </div>
            <!-- row end -->
        </div>
        <!-- work-img end -->

    </div>
    <!-- container end -->
</section>
<!-- section end -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/majesud3/public_html/majesticarts/resources/views/art-posts-detail.blade.php ENDPATH**/ ?>