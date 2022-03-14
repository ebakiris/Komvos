

<?php $__env->startSection('content'); ?>
<form method="GET" action="<?php echo e(route('success')); ?>">
    <div class="card bg-primary" id = "card1">
        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 1ο')); ?>

        </div>

        <div class="card-body" id = "tablecourse">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->semester ==  1): ?>
                    <input type="checkbox" name="<?php echo e($item->name); ?>">
                    <label for="<?php echo e($item->name); ?>"> <?php echo e($item->name); ?></label><br>
                <?php endif; ?> 
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 3ο')); ?>

        </div>

        <div class="card-body" id = "tablecourse">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->semester ==  3): ?>
                    <input type="checkbox" name="<?php echo e($item->name); ?>">
                    <label for="<?php echo e($item->name); ?>"> <?php echo e($item->name); ?></label><br>
                <?php endif; ?> 
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 5ο')); ?>

        </div>

        <div class="card-body" id = "tablecourse">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->semester ==  5): ?>
                    <input type="checkbox" name="<?php echo e($item->name); ?>">
                    <label for="<?php echo e($item->name); ?>"> <?php echo e($item->name); ?></label><br>
                <?php endif; ?> 
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 7ο')); ?>

        </div>

        <div class="card-body" id = "tablecourse">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->semester ==  7): ?>
                    <input type="checkbox" name="<?php echo e($item->name); ?>">
                    <label for="<?php echo e($item->name); ?>"> <?php echo e($item->name); ?></label><br>
                <?php endif; ?> 
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 9ο')); ?>

        </div>

        <div class="card-body" id = "tablecourse">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->semester ==  9): ?>
                    <input type="checkbox" name="<?php echo e($item->name); ?>">
                    <label for="<?php echo e($item->name); ?>"> <?php echo e($item->name); ?></label><br>
                <?php endif; ?> 
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
    <div class="card bg-primary" id = "card2">
        
        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 2ο')); ?>

        </div>

        <div class="card-body" id = "tablecourse">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->semester ==  2): ?>
                    <input type="checkbox" name="<?php echo e($item->name); ?>">
                    <label for="<?php echo e($item->name); ?>"> <?php echo e($item->name); ?></label><br>
                <?php endif; ?> 
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 4ο')); ?>

        </div>

        <div class="card-body" id = "tablecourse">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->semester ==  4): ?>
                    <input type="checkbox" name="<?php echo e($item->name); ?>">
                    <label for="<?php echo e($item->name); ?>"> <?php echo e($item->name); ?></label><br>
                <?php endif; ?> 
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 6ο')); ?>

        </div>

        <div class="card-body" id = "tablecourse">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->semester ==  6): ?>
                    <input type="checkbox" name="<?php echo e($item->name); ?>">
                    <label for="<?php echo e($item->name); ?>"> <?php echo e($item->name); ?></label><br>
                <?php endif; ?> 
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 8ο')); ?>

        </div>

        <div class="card-body" id = "tablecourse">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->semester ==  8): ?>
                    <input type="checkbox" name="<?php echo e($item->name); ?>">
                    <label for="<?php echo e($item->name); ?>"> <?php echo e($item->name); ?></label><br>
                <?php endif; ?> 
                
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="card-header text-md-left ">
            <?php echo e(__('Eξάμηνο 10ο')); ?>

        </div>

        <div class="card-body">
            <?php echo e(__('Διπλωματική')); ?>

        </div>
    </div>
    <br>
    <input type="submit" value="Εγγραφή" id="subscribe">

</form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Komvos\resources\views/courses.blade.php ENDPATH**/ ?>