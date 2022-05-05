<?php echo $__env->make('admin/header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

    <!-- begin:: Page -->

    <!-- begin:: Header Mobile -->
    <div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
        <div class="kt-header-mobile__logo">
            <a href="<?php echo e(url('/')); ?>">
                <img alt="Logo" src="<?php echo e(url('/')); ?>/assets/media/logos/logo-light.png" />
            </a>
        </div>
        <div class="kt-header-mobile__toolbar">
            <button class="kt-header-mobile__toggler kt-header-mobile__toggler--left" id="kt_aside_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__toggler" id="kt_header_mobile_toggler"><span></span></button>
            <button class="kt-header-mobile__topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon-more"></i></button>
        </div>
    </div>

    <!-- end:: Header Mobile -->
    <div class="kt-grid kt-grid--hor kt-grid--root">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

            <?php echo $__env->make('admin/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

                <?php echo $__env->make('admin/top-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">



                    <!-- begin:: Content -->
                    <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

                        <!--Begin::Dashboard 1-->

                        <!--Begin::Row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">
                                                Edit Blog
                                            </h3>
                                        </div>
                                    </div>
                                    <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                    <?php if(session('msg')): ?>

                                    <div class="alert alert-danger alert-dismissible" id="success_message">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                                        <h4><i class="icon fa fa-check"></i> Congratulation </h4>
                                        <?php echo e(session('msg')); ?>

                                    </div> 
                                    <?php endif; ?>
                                    <?php $__currentLoopData = $records; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $record): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <form method="POST" action="<?php echo e(url('admin/edit-blog')); ?>" class="kt-form" enctype="multipart/form-data">
                                        <div class="kt-portlet__body">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id" value="<?php echo e($record->id); ?>">
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Title')); ?></label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e($record->title); ?>" required autocomplete="name" autofocus>

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Slug')); ?></label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="slug" value="<?php echo e($record->slug); ?>">

                                                </div>
                                            </div>
                                            
                                            <!-- add new fields-->
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Description')); ?> <small>(SEO)</small></label>

                                                    <div class="col-md-6">
                                                        <input id="description_content" type="text" class="form-control" name="description_content" value="<?php echo e($record->description_content); ?>">

                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                    <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Keywords')); ?> <small>(SEO)</small></label>

                                                    <div class="col-md-6">
                                                        <input id="keywords_content" type="text" class="form-control" name="keywords_content" value="<?php echo e($record->keywords_content); ?>">

                                                    </div>
                                                </div>
                                                <!-- end new fields -->

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Excerpt')); ?></label>

                                                <div class="col-md-6">
                                                    <textarea class="form-control" name="excerpt" value="<?php echo e(old('excerpt')); ?>"><?php echo e($record->excerpt); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Body')); ?></label>
                                                <div class="col-md-6">
                                                    <textarea name="content" class="form-control" data-provide="markdown" rows="10"><?php echo e($record->body); ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Image')); ?></label>

                                                <div class="col-md-6">
                                                    <input id="file" type="file" class="form-control" name="file">
                                                    <input id="file" type="hidden" class="form-control" name="oldfile" value="<?php echo e($record->image); ?>">
                                                </div>
                                            </div>

                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        <?php echo e(__('Update')); ?>

                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!--End::Row-->

                    </div>

                    <!-- end:: Content -->
                </div>
                <?php echo $__env->make('admin/footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\m_art\resources\views/admin/edit-blog.blade.php ENDPATH**/ ?>