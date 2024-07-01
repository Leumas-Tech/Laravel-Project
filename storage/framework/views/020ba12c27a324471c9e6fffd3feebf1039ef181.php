

<?php $__env->startSection('title'); ?>
    <?php echo e(__('Login')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!-- Login Section -->
    <section class="section-style site-auth" style="background-image: url('/resources/views/frontend/img/4544546.jpg');
    background-size: cover;
    background-repeat: no-repeat;">
        
        <div style="text-align: center; margin-top: -40px;">
    <img src="/resources/views/frontend/img/g-k.png" width="50%">

</div>
        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8 col-md-12">
                    <div class="auth-content" style="border: 1px solid #15FFDF; border-radius: 20px; background-color: #0E0E0E;">
                        
                        <br>
                        
                        <div style="text-align: center; margin-top: -40px;">
                            <h1 style="color: #15FFDF;">Account Login</h1>
                        </div>
                        
                        <br>
                        
                        <?php if($errors->any()): ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <strong><?php echo e($error); ?></strong>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        <?php endif; ?>


                        <div class="site-auth-form">
                            <form method="POST" action="<?php echo e(route('member-login.html')); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="single-field">
                                    <div class="input-container">
    <div class="prefix">Number</div>
    <input
        style="background-color: #fcf800; border-radius: 0 5px 5px 0; border: 2px solid #15FFDF;"
        class="box-input"
        inputmode="numeric"
        type="number"
        name="email"
        placeholder="Phone Number"
        required
    />
</div>

<style>
    .input-container {
        display: flex;
        align-items: center;
        width: auto;
        border: 1px solid #000;
        border-radius: 0;
        padding: 0;
    }

    .prefix {
        padding: 10px;
        background-color: #0E0E0E;
        color: #15FFDF;
        border: 2px solid #15FFDF;
        height: 50px;
        border-radius: 5px 0 0 5px;
    }

    
</style>
                                </div>
                                <div class="single-field">
                                    <div class="password">
                                        <input
                                            style="background-color: #fcf800; border: 2px solid #15FFDF;"
                                            class="box-input"
                                            type="password"
                                            name="password"
                                            placeholder="Enter your password"
                                            required
                                        />
                                    </div>
                                </div>

                                <?php if($googleReCaptcha): ?>
                                    <div class="g-recaptcha mb-3" id="feedback-recaptcha"
                                         data-sitekey="<?php echo e(json_decode($googleReCaptcha->data,true)['google_recaptcha_key']); ?>">
                                    </div>
                                <?php endif; ?>

                                <div class="single-field" style="display:none">
                                    <input
                                        class="form-check-input check-input"
                                        type="checkbox"
                                        name="remember"
                                        id="flexCheckDefault"
                                        checked
                                    />
                                    <label class="form-check-label" for="flexCheckDefault">
                                        <?php echo e(__('Remember me')); ?>

                                    </label>

                                    <?php if(Route::has('password.request')): ?>
                                        <span class="forget-pass-text"><a
                                                href="<?php echo e(route('password.request')); ?>"><?php echo e(__('Forget Password')); ?></a></span>
                                    <?php endif; ?>
                                </div>
                                <button type="submit" class="site-btn btn w-100" style="border: 1px solid #15FFDF; border-radius: 10px; background-color: #0E0E0E; color: #15FFDF; font-size: 15px; font-weight: bold;">
                                    <?php echo e(__('Account Login')); ?>

                                </button>
                            </form>
                        </div>
                        
                        <div class="container1">
    <div class="left-buttons">
        
            <button class="button" style="width: 70px; border: 1px solid #15FFDF; border-radius: 5px; background-color: #0E0E0E; color: #15FFDF; font-size: 15px; font-weight: bold;">Login</button>
            
        <a href="/signup.html">
        <button class="button" style="width: 70px; border-radius: 5px; background-color: #0E0E0E; color: #15FFDF; font-size: 15px;">Register</button>
        </a>
        
    </div>
    <a href="/oreesolar.apk">
        <button class="button" style="border-radius: 5px; background-color: #0E0E0E; color: #9FABC4; font-size: 15px; font-weight: bold;">APP Download</button>
    </a>
    
</div>                   
                        
                        <style>
    .container1 {
        display: flex;
        justify-content: space-between;
    }
    .left-buttons {
        display: flex;
    }
    .button {
        margin-right: 6px;
    }
</style>
                        
                    </div>
                </div>
            </div>
        </div>
        <select id="language_selector" class="notranslate" onchange="changeLanguage(this.value)">
	<option value="en">English</option>
	<option value="tr">Türkçe</option>
	<option value="az">Azərbaycan</option>
	<option value="es">Español</option>
	<option value="de">Deutsch</option>
	<option value="fr">Français</option>
	<option value="ar">العربية (Arabic)</opton>
	<option value="zh-CN">简体中文</option>
	<option value="ru">Русский</option>
	<option value="hi">हिन्दी</option>
	<option value="zh">中文 (Mandarin)</option>
		<option value="ja">日本語 (Japanese)</option>
		<option value="pt">Português</option>
		<option value="it">Italiano</option>
		<option value="nl">Nederlands</option>
		<option value="ko">한국어 (Korean)</option>
		<option value="vi">Tiếng Việt</option>>
		<option value="th">ไทย (Thai)</option>
		<option value="pl">Polski</option>
		<option value="el">Ελληνικά (Greek)</option>
		<option value="hu">Magyar</option>
		<option value="sv">Svenska</option>
		<option value="fi">Suomi</option>
</select>
    </section>
    <!-- Login Section End -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <?php if($googleReCaptcha): ?>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u718774278/domains/1.ponziscript.com/public_html/resources/views/frontend/auth/login.blade.php ENDPATH**/ ?>