<div class="hv-item">
    <div class="hv-item-parent">
        <div class="person">
            <?php if(null != $levelUser->avatar): ?>
            <?php else: ?>
            <?php endif; ?>
            <p class="name">
                <?php if($me): ?>
                    <?php echo e(__("It's Me")); ?> <?php echo e(preg_replace('/\+\d+/', '', $levelUser->phone)); ?>

                <?php else: ?>
                    <b><?php echo e(preg_replace('/^\+\d{1,4}|\d{4}$/', '', $levelUser->phone)); ?>**** <br> <?php if(setting('deposit_level')): ?>
                            <?php echo e(__('Deposit')); ?> <?php echo e($currencySymbol.$levelUser->totalDeposit()); ?>,
                        <?php endif; ?> <?php if(setting('investment_level')): ?>
                            <?php echo e(__('Invest')); ?> <?php echo e($currencySymbol.$levelUser->totalInvestment()); ?>,
                        <?php endif; ?> <?php if(setting('profit_level')): ?>
                            <?php echo e(__('Profit')); ?> <?php echo e($currencySymbol.$levelUser->totalRoiProfit()); ?>

                        <?php endif; ?></b>
                <?php endif; ?>

            </p>
        </div>
    </div>



    <?php if($depth && $level > $depth && $levelUser->referrals->count() > 0): ?>

        <div class="hv-item-children">

            <?php $__currentLoopData = $levelUser->referrals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $levelUser): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="hv-item-child">
                    <!-- Key component -->
                    <?php echo $__env->make('frontend.referral.include.__tree',['levelUser' => $levelUser,'level' => $level,'depth' => $depth + 1,'me' => false], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>

    <?php endif; ?>


</div>


<?php /**PATH /home/u718774278/domains/1.ponziscript.com/public_html/resources/views/frontend/referral/include/__tree.blade.php ENDPATH**/ ?>