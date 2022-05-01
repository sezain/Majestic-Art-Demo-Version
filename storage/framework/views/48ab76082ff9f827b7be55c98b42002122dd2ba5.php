
<!-- footer start -->
<footer footer-data-animation-container class="footer bg-black">
    
    <!-- container start -->
    <div class="container">
        <!-- row start -->
        <div class="row justify-content-md-between justify-content-sm-center">

        </div>
        <!-- row end -->


        <!-- row start -->
        <div data-animation-child class="row justify-content-between footer-bottom slide-up delay-4" data-animation="slide-up">
            <div class="col-md-6">
                <div data-animation-child class="copyright slide-up delay-5" data-animation="slide-up">
                    <p class="text-light-gray"><?php echo e(date('Y')); ?> @ Majestic Arts. All rights reserved</p>
                </div>
            </div>

            <div class="col-md-6">
                <div data-animation-child class="footer-social social slide-up delay-5" data-animation="slide-up">
                    <div class="social-item">
                        <a class="text-white" href="https://twitter.com/themajesticarts">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </div>
                    <div class="social-item">
                        <a class="text-white" href="https://www.instagram.com/themajesticarts/">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                    <div class="social-item">
                        <a class="text-white" href="https://www.facebook.com/majesticartsofficial">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                    <div class="social-item">
                        <a class="text-white" href="https://www.linkedin.com/company/majesticarts/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- row end -->

    </div>
    <!-- container end -->
    
    
   
    
    <img  src="https://majesticarts.com/public/img/menu-bg/11.jpg" width="1" alt="Client">
    
    
 

<!-- <button class="pr-page" onclick="goBack()">Previous Page</button> -->
<script type="text/javascript">
function goBack() {
  window.history.back();
}
</script>
    
</footer>
<!-- footer end -->
   
</main>
<!-- main end -->

<!-- JavaScript -->
<script src="<?php echo e(asset('public/js/plugins.js')); ?>"></script>
<script src="<?php echo e(asset('public/js/main.js')); ?>"></script>


<!-- 3D Container -->
<script src="<?php echo e(asset('public/js/plug/plugins.js')); ?>"></script>  
<script src="<?php echo e(asset('public/js/plug/universal-tilt.js')); ?>"></script>  
<script type="text/javascript">
function tiltJsParallUx() {
    var windowWidth = $(window).width();
    if (windowWidth > 991) {
        $('.tilt').UniversalTilt({
            max: 35,
            perspective: 1500,
            mobile: false,
        });
    }
}
tiltJsParallUx();
</script>
<!-- 3D Container -->
<!-- Menu Bg -->
<script type="text/javascript">
    $('.background-changer').on('mouseover', 'a', function () {

        var background = "url('" + $(this).attr('data-background') + "')";

        $('.background-changer').css('background-image', background)
    });
</script>
<!-- Menu Bg -->

<script type="text/javascript">

</script>

</body>
</html><?php /**PATH /home/majesud3/public_html/majesticarts/resources/views/footer.blade.php ENDPATH**/ ?>