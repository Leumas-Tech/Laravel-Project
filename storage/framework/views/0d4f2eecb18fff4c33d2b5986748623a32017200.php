<?php $__env->startSection('title'); ?>
    <?php echo e(__('All Schema')); ?>

<?php $__env->stopSection(); ?>
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/schema.css')); ?>"/>
<div style="display: flex; justify-content: center;">
  <img src="/resources/views/frontend/solar/214441.jpg" class="rrr" />
</div>

<?php $__env->startSection('content'); ?>





<div class="container47">
    <div class="container48">
    <div class="text" style=" background-color: #041740; border-radius: 10px 3px 10px 10px;"><button class="fdre">Investing</button></div>
    <div class="line"></div>
    <div onclick="window.location.href='/h5/index.php/my-vip'" class="text" style=" border-radius: 3px 10px 10px 10px;"><button class="fdre">My Invest</button></div>
</div>
</div>



<?php $__currentLoopData = $schemas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $schema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="container1">
        <div class="container2" style="background: url('<?php echo e(asset($schema->icon)); ?>'); background-size: 100% 100%;">
            <div style="display: flex; justify-content: center;">
                 <?php if($schema->badge): ?>
                         <p class="slar"><?php echo e($schema->badge); ?></p>                
                                    <?php endif; ?>
               
            </div>
        </div>
        <div class="container3">
            
            <p class="container4"><?php echo e($schema->name); ?></p>
            <p class="rkm">Invest Price:</p>
            <p class="rkm khg">Daily Earnings:</p>
            <p class="rkm khg">VIP Duration:</p>
            
            </div>
            
             <div class="container3">
                 
                 <p class="rkj" style="visibility:hidden;">v</p>
                 <p class="rkj"><?php echo e($schema->type == 'range' ? $currencySymbol . $schema->min_amount . '-' . $currencySymbol . $schema->max_amount : $currencySymbol . $schema->fixed_amount); ?></p>
                 <p class="rkj khg"><?php echo e(' '. ($schema->interest_type == 'percentage' ? $schema->return_interest.'%' : $currencySymbol.$schema->return_interest )); ?></p>
                 <p class="rkj khg"><?php echo e(($schema->return_type == 'period' ? $schema->number_of_period : 'Unlimited').($schema->number_of_period == 1 ? ' Time' : ' Days' )); ?></p>
                 <a href="<?php echo e(route('user.schema.preview',$schema->id)); ?>">
                     <button class="rkjj">INVEST</button>
                 </a>
            
            </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
    <?php echo $__env->make('frontend.footer.invest', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u718774278/domains/1.ponziscript.com/public_html/resources/views/frontend/schema/index.blade.php ENDPATH**/ ?>