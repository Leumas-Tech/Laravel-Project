
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/menu.css')); ?>"/>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('profile')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('frontend.footer.my', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div style="text-align: center; margin-right: 160px; margin-top: -15px;">
    <div style="display: inline-block; text-align: right;">
       <div class="centered-h2">
        <h4>Private Center</h4>
    </div> 
    </div>
</div>
<br>

<div style="text-align: center; padding-left: 5px;
    padding-right: 5px;">
    <div style="display: flex; background-image: url('/resources/views/frontend/img/solar1.jpeg');
    background-size: cover;
    background-repeat: no-repeat; border-radius: 1px;">
    <div style="flex: 1;">
        <p class="ppr">Balance(<?php echo e(setting('currency_symbol','global')); ?>)<br><a class="ppa"><?php echo e($user->balance); ?></a></p>
    </div>
    <div style="flex: 1;">
        <img src="/resources/views/frontend/img/logo54856.jpg" style="max-width: 100px; height: auto; border-radius: 50%; box-shadow: 0 0 10px rgba(0, 252, 114, 0.5);">
    </div>
    <div style="flex: 1;">
        <p class="ppr">Profit(<?php echo e(setting('currency_symbol','global')); ?>)<br><a class="ppa"><?php echo e($user->profit_balance); ?></a></p>
    </div>
</div>
</div>

<div style="margin-top: 20px;"></div>

<div class="centered-content2">
    <p class="kjk">Commissioner</p>
</div>
<div style="margin-top: 5px;"></div>
<div class="centered-content2">
    <p class="kjk">ID: <?php echo e(str_replace('@id.com', '', $user->email)); ?> </p>
    
    <p class="kjk">Phone: <?php echo e(preg_replace('/\+\d+/', '', $user->phone)); ?> </p>
</div>

<div style="margin-top: 30px;"></div>

<div class="centered-content">
    <div class="paragraph-container">
    <a href="/h5/index.php/deposit" class="prg" style="margin-left: 15px; text-shadow: 2px 2px 4px rgba(246, 255, 0, 0.3), -2px -2px 4px rgba(246, 255, 0, 0.3);">Deposit</a>
    <a href="/h5/index.php/deposit"><img  src="/resources/views/frontend/img/transin.png" style="height: 40px; margin-top: 12px;"></a>
    <div class="line"></div>
    <a href="/h5/index.php/withdraw" class="prg">Withdraw</a>
    <a href="/h5/index.php/withdraw"><img src="/resources/views/frontend/img/transout.png" style="height: 40px; margin-top: 12px;"></a>
</div>

</div>

<div style="margin-top: 30px;"></div>



<div class="centered-content">
    <div class="content-container">
    
    <a href="/h5/index.php/wallet-exchange">
    <div class="container" style="margin-top: 0px;">
    <p class="left-top">Wallet Exchange</p>
    <img src="/resources/views/frontend/img/join.png" style="margin-right: -13px;" class="right-top">
</div>
<div class="horizontal-line"></div>
</a>
    
    <a href="/h5/index.php/deposit/log">
    <div class="container" style="margin-top: 20px;">
    <p class="left-top">Deposit Record</p>
    <img src="/resources/views/frontend/img/join.png" style="margin-right: -13px;" class="right-top">
</div>
<div class="horizontal-line"></div>
</a>
    
<a href="/h5/index.php/withdraw/log">
    <div class="container" style="margin-top: 20px;">
    <p class="left-top">Withdraw Record</p>
    <img src="/resources/views/frontend/img/join.png" style="margin-right: -13px;" class="right-top">
</div>
<div class="horizontal-line"></div>
</a>

<a href="/h5/index.php/transactions">
    <div class="container" style="margin-top: 20px;">
    <p class="left-top">Transcation</p>
    <img src="/resources/views/frontend/img/join.png" style="margin-right: -13px;" class="right-top">
</div>
<div class="horizontal-line"></div>
</a>

<a href="/h5/index.php/withdraw/account">
    <div class="container" style="margin-top: 20px;">
    <p class="left-top">Add Wallet</p>
    <img src="/resources/views/frontend/img/join.png" style="margin-right: -13px;" class="right-top">
</div>
<div class="horizontal-line"></div>
</a>

<a href="/h5/index.php/change-password">
    <div class="container" style="margin-top: 20px;">
    <p class="left-top">Reset Password</p>
    <img src="/resources/views/frontend/img/join.png" style="margin-right: -13px;" class="right-top">
</div>
<div class="horizontal-line"></div>
</a>

</div>

</div>


<div style="margin-top: 10px;"></div>



<div class="centered-content3">
    <form action="<?php echo e(route('logout')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <button type="submit" class="custom-button">Logout</button>
    </form>
</div>


<div style="margin-top: 40px;"></div>


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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontend.layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u718774278/domains/1.ponziscript.com/public_html/resources/views/frontend/user/setting/index.blade.php ENDPATH**/ ?>