
<?php $provider = app('App\Http\Controllers\SuccessfullSubscribeController'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>
                H εγγραφή σας στα μαθήματα έγινε επιτυχώς!
                <?php echo e($provider::getParameters()); ?>

            </h1>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Komvos\resources\views/success.blade.php ENDPATH**/ ?>