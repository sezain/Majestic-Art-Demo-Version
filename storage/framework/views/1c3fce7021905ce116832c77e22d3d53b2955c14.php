<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
    <style>
        @media  only screen and (max-width: 800px) {
            .inner-body {
                width: 100% !important;
                padding: 32px;
            }

            .footer {
                width: 100% !important;
            }
        }

    </style>
    <?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <table class="inner-body" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <?php echo $__env->yieldContent('content'); ?>
            </td>
        </tr>
    </table>
</body>
<?php /**PATH C:\Users\aarth\Desktop\Majestic-Art-Demo-Version\resources\views/emails/layout.blade.php ENDPATH**/ ?>