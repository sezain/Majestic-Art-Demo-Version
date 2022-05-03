<div class="footer content-cell">
    <p style="margin-top: 16px">© <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. <?php echo app('translator')->getFromJson('All rights reserved.'); ?></p>
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
<?php /**PATH C:\Users\aarth\Desktop\Majestic-Art-Demo-Version\resources\views/vendor/mail/html/footer.blade.php ENDPATH**/ ?>