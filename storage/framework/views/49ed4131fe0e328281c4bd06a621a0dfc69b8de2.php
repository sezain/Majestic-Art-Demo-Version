<?php $__env->startComponent('mail::message'); ?>
    <h2><b>Hello there</b></h2>

    <p>
        We’re excited to welcome you to our community! From now we can keep you updated with our latest articles about
        fine art world, and also with some new announcements about our art gallery events.
    </p>
    <br>
    <p>
        If you have any questions, write them to info@majesticarts.com - a member of Majestic Arts team will be excited to
        answer.
    </p>
    <br>
    <p>
        See you soon!
    </p>

    <div class="footer ">
        <p style="margin-top: 16px">&copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. <?php echo app('translator')->getFromJson('All rights reserved.'); ?></p>
        <p style="margin-top: 32px; margin-bottom: 5px;">You received this email because you’re subscribed to Majestic Arts
            Newsletter</p>
        <div style="margin-bottom: 5px;">

            <a href="<?php echo e(route('unsubscribe', $token)); ?>">Unsubscribe</a>
        </div>

        <div>
            <a href="<?php echo e(config('app.url')); ?>">Privacy policy</a> <b>|</b>
            <a href="<?php echo e(route('contact')); ?>">Contact Us</a>
        </div>
    </div>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH C:\xampp\htdocs\m_art\resources\views/vendor/mail/html/subscribed.blade.php ENDPATH**/ ?>