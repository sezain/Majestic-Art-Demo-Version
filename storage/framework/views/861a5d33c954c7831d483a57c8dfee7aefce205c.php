<?php $__env->startSection('title', 'Services'); ?>

<?php $__env->startSection('main-content'); ?>
<section id="firstSection" class="page-header section-60vh">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h1 class="page-header-title text-black">
                    <span class="slide-over" style="font-size: 55px;">The Majestic Arts Services</span>
                </h1>
            </div>
            <div class="col-xl-12">
                <p class='page-header-text text-lead text-black'>
                    <span class="slide-over" style="font-size: 15px;">
                        Majestic Arts was founded with a vision to
                        provide a 360 degree range of services in the art industry.
                    </span>
                </p>
            </div>
        </div>
    </div>
</section>

    <!-- about page main start -->
<section class="page-main">
    <div class="section-large" style="padding: 0">
        <div data-animation-container class="container">
            <div class="row" style="background: #fbf8f1; padding: 40px 30px;">
                <div class="col-lg-12">
                    <p data-animation-child class="text-lead text-black slide-up delay-1" data-animation="slide-up">
                        Majestic Arts were founded with a mission to provide a full 360-degree range 
                        of services in the art industry. The chief task of Majestic art is to perform 
                        all art-related services at a higher level. Besides, it also aims to give the 
                        best results in buying and selling art pieces at different platforms. We have 
                        the best art gallery in Dubai, and providing the following services.
                        <br><br>
                        <span class="sub-t-heading">Scientific authentication of works of art</span>
                        <br><br>
                        Majestic Art provides the best scientific authentication of works of art. It gives
                        authenticity in art in various ways in which art or an artistic presentation is 
                        depicted as original work. Secondly, it also refers to the extent of work 
                        possessing original or innate power, e.g., it tends to measure and show the 
                        genuineness, authenticity of expression, and ethical passion which artists or 
                        performers put into the work. The Majestic art strikes with these questions in the 
                        effort to resolve an actual creator of work and all original collections exhibit in 
                        the art gallery.
                        <br><br>
                        <span class="sub-t-heading">Restoration of pieces</span>
                        <br><br>
                        Majestic Art also serves to restore different pieces of art. There, it tends to 
                        safeguard the reliability and value of innovative work of art. It also attempts to 
                        preserve and mend structural designing, paintings, drawings, prints, sculptures, 
                        and objects of the decorative arts that have been severely exaggerated by 
                        carelessness, stubborn damage, or the predictable decay caused by the time and 
                        human. Moreover, Majestic Art tends to work to repair paintings and different art 
                        pieces that are no more captivating. It tends to enhance the beauty of art and 
                        serve them in a new model and display in No. 01 Dubai art gallery. Primarily, it 
                        restores those damaged paintings that have suffered any damage like water, fire, or 
                        insect damage and paint loss.
                        <br><br>
                        <span class="sub-t-heading">Evaluation of works of art</span>
                        <br><br>
                        The services of Majestic Arts are limited to the restoration of arts, but it also 
                        evaluates and analyses the work of art. Majestic Arts best perform this task of 
                        assessing a work of art because it analyses the effectiveness of the work of art 
                        and evaluates and determines the development of work produced. It helps in 
                        representing the real picture of art and also the value of art.
                        <br><br>
                        <span class="sub-t-heading">Locating Masterpieces</span>
                        <br><br>
                        Currently, a masterpiece is a formation in any region of different arts blessed 
                        with much significant honor, e.g., the one that has been considered the utmost 
                        work of a person's profession. In this sense, Majestic Arts locates those real 
                        masterpieces of art and get them ahead at different platforms by exhibiting them 
                        to sale. Here, we can say that the Majestic arts introduce new pieces in arts and 
                        paintings. It can help customers to enjoy a great variety of art masterpieces in 
                        Majestic Art gallery.
                        <br><br>
                        <span class="sub-t-heading">Facilitating the sale of works of art</span>
                        <br><br>
                        Another essential function performed by Majestic Arts is to facilitate the sale of 
                        works of art. Majestic Arts has made it easier for its customers to enjoy different 
                        arts colors in Dubai art gallery. In this way, customers are being facilitated 
                        because they need not visit any other art galleries of Dubai but can get various 
                        arts at best art gallery in Dubai. You can now get whatever captivates your attention.
                        <br><br>
                        <span class="sub-t-heading">Provision of strategic advice</span>
                        <br><br>
                        Strategic pieces of advice are measures, projects, and other activities planned to 
                        produce the best outcomes that eventually lead to attain objectives, goals, and to 
                        achieve the vision of an organization. Majestic Arts brings a bit of competent 
                        strategic advice to bring out ideas, execution and vision. Majestic Art provides 
                        various conditions of useful strategic bits of advice, whether related to individual 
                        works or collections. In this way, it has mapped long-term dreams to the main 
                        objective and best actionable steps.
                        <br><br>
                        <span class="sub-t-heading">Selling, Buying, and exhibition of arts</span>
                        <br><br>
                        Majestic Arts have best proved itself in fields of selling, buying and exhibiting and arts.
                        It tends to buy different products from different clients and then display them over various
                        platforms like Amazon and eBay to sell them to different customers. In this way, the best
                        masterpieces of arts get introduced in the world of arts. Furthermore, it also offers to
                        enhance the beauty of those art pieces which get damaged by repairing them or by giving them
                        new looks. Through exhibiting masterpieces, it has gained much fame.
                        <br><br>
                        <span class="sub-t-heading">Advisors of Majestic Arts</span>
                        <br><br>
                        Professor Seracini is an advisor of the Majestic arts. He is a power in the world of 
                        art authentication and applied multispectral imaging and analytical technology in 
                        benefit to the field of cultural heritage. He has best performed himself in the 
                        progress of Majestic Arts.
                        <br><br>
                        <?php if($services->count() > 0): ?>
                            <span class="sub-t-heading">Services of Majestic Arts</span>
                            <br>
                            Majestic arts have different roots in fields of presenting the following arts:
                            <br><br>
                            
                            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('service', $service->slug)); ?>" > 
                                    <span style="font-size: 20px; line-height: 32px; text-transform: capitalize;"> 
                                        <?php echo e(strtolower($service->title)); ?>

                                    </span>
                                    </a>
                                <br>
                                <?php echo e($service->excerpt); ?>

                                <br><br>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </p>
                </div>
            </div>
        </div>
    </section>
        <!-- section end -->

        <!-- section start -->
<section class="section-large overlay-black bg-image lazy" style="padding: 0; padding-bottom: 32px">
    <div class="container">
        <div data-animation-container class="form-outer row justify-content-center">
            <div class="col-lg-10">
                <div class="section-title section-title-small text-center">
                    <h2 data-animation-child class="text-white slide-up" data-animation="slide-up">
                        Lets get in touch
                    </h2>
                </div>
                <form class="contact-message row" id="form" method="post" action="<?php echo e(route('sendmail')); ?>">
                    <div data-animation-child class="form-group col-md-6 slide-up delay-3"
                        data-animation="slide-up">
                        <input id="username" type="text" name="name" placeholder="Name">
                    </div>
                    <div data-animation-child class="form-group col-md-6 slide-up delay-3"
                        data-animation="slide-up">
                        <input id="email" type="email" name="email" placeholder="Email">
                    </div>
                    <div data-animation-child class="form-group col-12 slide-up delay-4"
                        data-animation="slide-up">
                        <textarea id="message" name="message" placeholder="Message" rows="3"></textarea>
                    </div>
                    <div data-animation-child class="col-12 text-center slide-up delay-5"
                        data-animation="slide-up">
                        <button class="btn btn-outline-white text-white" id="submit" type="submit"
                            name="submit">send message</button>
                    </div>
                </form>
                <div class="output-message-outer">
                    <div class="output-message text-center alert"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\majesticarts\resources\views/services.blade.php ENDPATH**/ ?>