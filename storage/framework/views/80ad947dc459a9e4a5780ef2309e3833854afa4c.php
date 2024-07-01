
<?php $__env->startSection('title'); ?>
    <?php echo e(__('Contact')); ?>

<?php $__env->stopSection(); ?>
<div class="uwe">
    <p style="height: 5px;"></p>
    <img src="/resources/views/frontend/img2/close.png" style="position: absolute; top: 15; left: 15; width: 30px;" onclick="goBack()">
    <h3 class="title" style="display: flex; justify-content: center; font-size: 20px; color: white;"><?php echo e(__('Contact')); ?></h3>
</div>
<script>
    function goBack() {
        window.history.back();
    }
</script>
<?php $__env->startSection('content'); ?>



<div style="display: flex; justify-content: center; width: 100%; margin-bottom: 20px;" onclick="window.location.href='https://t.me/ponziscriptadmin'">
    <div class="containerh">
    <img src="/resources/views/frontend/img2/3410045.webp" class="sol-resim">
    <p class="orta-metin">Customer Service 1</p>
    <img src="/resources/views/frontend/img2/2384398.webp" class="sag-resim">
  </div>
</div>


<div style="display: none; justify-content: center; width: 100%; margin-bottom: 20px;" onclick="window.location.href='https://t.me/oreesolar2'">
    <div class="containerh">
    <img src="/resources/views/frontend/img2/3410045.webp" class="sol-resim">
    <p class="orta-metin">Customer Service 2</p>
    <img src="/resources/views/frontend/img2/2384398.webp" class="sag-resim">
  </div>
</div>


<div style="display: none; justify-content: center; width: 100%; margin-bottom: 20px;" onclick="window.location.href='https://t.me/oreesolarglobal'">
    <div class="containerh">
    <img src="/resources/views/frontend/img2/5487791.webp" class="sol-resim">
    <p class="orta-metin">Community Group</p>
    <img src="/resources/views/frontend/img2/2384398.webp" class="sag-resim">
  </div>
</div>


<div style="display: flex; justify-content: center; width: 100%; margin-bottom: 20px;" onclick="window.location.href='https://t.me/ponziscriptshop'">
    <div class="containerh">
    <img src="/resources/views/frontend/img2/5507930.webp" class="sol-resim">
    <p class="orta-metin">Community Channel</p>
    <img src="/resources/views/frontend/img2/2384398.webp" class="sag-resim">
  </div>
</div>













<style>
.containerh {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  background-color: #060c52;
  border-radius: 10px;
  box-shadow: 10px 10px 20px rgba(65, 66, 69, 0.3);
  height: 70px;
}

.sol-resim,
.sag-resim {
  width: 60px; /* Resim genişliği */
  height: auto; /* Otomatik yükseklik ayarı */
}

.orta-metin {
  flex-grow: 1; /* Ortadaki metin alanının genişlemesini sağlar */
  text-align: center;
  width: 300px;
  margin: 0 20px; /* Metin ile resimler arasındaki boşluk */
}
    
    
</style>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u718774278/domains/1.ponziscript.com/public_html/resources/views/frontend/pages/contact.blade.php ENDPATH**/ ?>