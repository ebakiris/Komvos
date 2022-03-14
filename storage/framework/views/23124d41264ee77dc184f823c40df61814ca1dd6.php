
<?php $provider = app('App\Http\Controllers\DashboardController'); ?>
<?php $__env->startSection('content'); ?>

<div class="card bg-primary" id = "card1">
    <div class="card-header text-md-left ">
        <?php echo e(__('Προσωπικά Στοιχεία')); ?>

    </div>

    <img src="<?php echo e(asset('images/profile_picture.png')); ?>" width="175" height="175" class="center">
    <div class="card-body">
        <h6>
            <?php echo e(__('Όνομα :')); ?> <?php echo e($provider::getUserName()); ?>

        </h6>
        <h6>
            <?php echo e(__('Πανεπιστήμιο :')); ?> <?php echo e($provider::getUserUni()); ?>

        </h6>
        <h6>
            <?php echo e(__('Τμήμα :')); ?> <?php echo e($provider::getUserDep()); ?>

        </h6>
        <h6>
            <?php echo e(__('Email :')); ?> <?php echo e($provider::getUserEmail()); ?>

        </h6>
        <h6>
            <?php echo e(__('Σημειώσεις που ανέβηκαν :')); ?> <?php echo e($provider::getUserNotes()); ?>

        </h6>
    </div>
</div>
<div class="card bg-primary" id = "card2">
    <div class="card-header text-md-left ">
        <?php echo e(__('Μαθήματα που παρακολουθώ :')); ?>

    </div>

    <div class="card-body">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($item->id ==  $provider :: getId()): ?>
                <li> <?php echo e($item->course); ?> </li>
            <?php endif; ?> 
            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Komvos\resources\views/dashboard.blade.php ENDPATH**/ ?>