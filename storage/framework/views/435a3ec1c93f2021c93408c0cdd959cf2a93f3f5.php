<?php $provider = app('App\Http\Controllers\HomeController'); ?>
<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <h1> Διάλεξε το πανεπιστήμιο που επιθυμείς :</h1>
        <div class="col-md-8">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> 
                    <div class="dropdown">
                        <button class="btn btn-secondary" href="<?php echo e(route('password.request')); ?>" id = "uni"><?php echo e($item->name); ?></button>
                            <div class="dropdown-content">
                                <?php $__currentLoopData = $arrayname; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($item2->id == $item->id): ?>
                                        <a type="submit" href="<?php echo e(route('courses')); ?>"><?php echo e($item2->department); ?></a>                                                      
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Komvos\resources\views/home.blade.php ENDPATH**/ ?>