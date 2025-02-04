<?php $__env->startSection('content'); ?>

<h1>Autógyártók</h1>
<div>
    <a href="<?php echo e(route('makers.create')); ?>" title="Új">Új hozzáadása</a>
    <?php $__currentLoopData = $makers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $maker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class = "row <?php echo e($loop->iteration % 2 == 0 ? 'even' : 'odd'); ?>">
            <div class="col id"><?php echo e($maker->id); ?></div>
            <div class="col name"><?php echo e($maker->name); ?></div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel_projekt\resources\views/makers/index.blade.php ENDPATH**/ ?>