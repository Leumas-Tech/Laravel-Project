
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Server Error')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <img src="/assets/global/materials/500.svg" class="unusual-page-img" alt="">
    <h2 class="title">500</h2>
    <p class="description"><?php echo e(__('Server Error')); ?></p>
    <a href="<?php echo e(route('home')); ?>" class="back-to-home-btn"><?php echo e(__('Back to Home')); ?></a>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('errors.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u718774278/domains/1.ponziscript.com/public_html/resources/views/errors/500.blade.php ENDPATH**/ ?>