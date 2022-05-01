
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FontAwesome -->
    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <title><?php echo e($record->title); ?></title>
        <meta name="description" content="<?php echo e($record->description_content); ?>"/>
        <meta name="Keywords" content="<?php echo e($record->keywords_content); ?>">
        <meta name='robots' content='index,follow' />
        <link rel="canonical" href="https://majesticarts.com/blog/<?php echo e($record->slug); ?>" />
        <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php echo $__env->make('navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- blog Article page intro start -->
<section id="firstSection" class="page-header section-80vh bg-gradient-black bg-black blog-top-bg">
    <!-- container start -->
    <div class="container">
        <!-- row start -->
       <div class="row text-center">
            <div class="col-xl-12 text-center">
                <h1 class="blog-title text-white"><?php echo e($records[0]->title); ?></h1>
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
                <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-12">
                    <!-- blog-item start -->
                    <div class="blog-item bg-black2">
                        <div align="center">
                            <div class=" lazy" data-bg=""><img width="60%" height="80%" src="<?php echo e(asset('public/event/'.$record->image)); ?>"></div>
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
                            
<p><?php echo html_entity_decode($record->body, ENT_QUOTES | ENT_XML1, 'UTF-8'); ?></p>
                            
                            
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
<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/majesud3/public_html/majesticarts/resources/views/blog-detail.blade.php ENDPATH**/ ?>