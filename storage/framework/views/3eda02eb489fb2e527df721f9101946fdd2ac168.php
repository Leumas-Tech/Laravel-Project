<?php $__env->startSection('title'); ?>
    <?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('auth-content'); ?>
    <div class="login" style="display: flex; justify-content: center; background-color: #014380;">
        <div class="login-content">
            <div class="auth-body">

                <form action="<?php echo e(route('admin.login')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="single-box">
                        <input
                            type="email"
                            name="email"
                            class="box-input"
                            placeholder="Admin Email"
                            required
                        />
                    </div>
                    <div class="single-box">
                        <input
                            type="password"
                            name="password"
                            class="box-input"
                            placeholder="Password"
                            required
                        />
                    </div>
                    <div class="single-box">
                        <button class="site-btn primary-btn" type="submit" style="background-color: #182c40;"><?php echo e(__('Admin Login')); ?></button>
                    </div>
                </form>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.auth.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u718774278/domains/1.ponziscript.com/public_html/resources/views/backend/auth/login.blade.php ENDPATH**/ ?>