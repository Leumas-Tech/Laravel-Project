 <?php $__env->startSection('title'); ?> <?php echo e(__('Home')); ?> <?php $__env->stopSection(); ?> <?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(asset('frontend/css/dashboard.css')); ?>" />
<div class="fixed-header">
	<div class="image-container1"> <img class="image1" src="/resources/views/frontend/img/slrlogo.png"> <img onclick="window.location.href='/oreesolar.apk'" class="image2" src="/resources/views/frontend/img/googlePlay.png"> <img class="image3" id="openPopup" src="/resources/views/frontend/img/message.png"> </div>
</div>
<style>
.custom-popup {
	display: none;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background: rgba(0, 0, 0, 0.7);
	align-items: center;
	justify-content: center;
	z-index: 99999999;
}

.custom-popup p {
	color: white;
}

.custom-popup span {
	right: 100%;
	font-size: 40px;
	color: white;
	cursor: pointer;
	margin-left: 85%;
}

.orsl {
	font-size: 16px;
	color: white;
	text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;
}
</style>
<div class="custom-popup" id="customPopup">
	<div style="background: url(/resources/views/frontend/img2/solarc.png);background-size: 100% 100%;border-radius: 10px; width: 700px; height: 300px;"> <span id="customClosePopup">&times;</span>
		<div style="width: 100%; display: flex; justify-content: center;">
			<div style="margin-top: -10px;">
				<h5 class="orsl">Oree Solar News</h5>
				<h5 class="orsl">Minimum invest: 10$</h5>
				<h5 class="orsl">Minimum withdraw: 10$</h5>
				<h5 class="orsl">Play 3 Different Games Every<br>Day and Earn USDT for Free</h5>
				<h5 class="orsl">Team Earnings:<br> Level 1: 15% - Level 2: 8% - Level 3: 6%</h5>
				<h5 class="orsl">Telegram Chanel: <a href="https://t.me/ponziscriptshop">t.me/ponziscriptshop</a></h5> </div>
		</div>
	</div>
</div>
<script>
// Sayfa yüklendiğinde ve her 30 saniyede bir çalışacak JavaScript kodu
document.addEventListener('DOMContentLoaded', function() {
	const customPopup = document.getElementById('customPopup');
	const customClosePopup = document.getElementById('customClosePopup');
	const storageKey = 'popupLastShown';

	function showPopup() {
		customPopup.style.display = 'flex';
		localStorage.setItem(storageKey, Date.now().toString());
		setTimeout(function() {
			customPopup.style.display = 'none';
		}, 100000); // Popup'ın 5 saniye boyunca görünür kalması (istediğiniz süreyi değiştirebilirsiniz)
	}

	function shouldShowPopup() {
		const lastShown = localStorage.getItem(storageKey);
		if(!lastShown) {
			return true;
		}
		const currentTime = Date.now();
		const elapsedTime = currentTime - parseInt(lastShown);
		return elapsedTime > 240000; // 240 saniye geçtiyse true, aksi takdirde false
	}
	if(shouldShowPopup()) {
		showPopup();
	}
	customClosePopup.addEventListener('click', function() {
		customPopup.style.display = 'none';
	});
	// Sayfa dışına tıklanınca popup'ı kapat
	window.addEventListener('click', function(event) {
		if(event.target === customPopup) {
			customPopup.style.display = 'none';
		}
	});
	// img etiketine tıklandığında popup'ı göster
	const openPopup = document.getElementById('openPopup');
	openPopup.addEventListener('click', function() {
		showPopup();
	});
});
</script>
<div class="slider-container" style="box-shadow: 0 0 30px rgba(44, 46, 48, 0.5);">
	<div class="slider"> <img class="mkm" src="/resources/views/frontend/img/oree-solar3.jpg"> <img class="mkm" src="/resources/views/frontend/img/oree-solar2.jpg"> <img class="mkm" src="/resources/views/frontend/img/oree-solar1.jpg"> <img class="mkm" src="/resources/views/frontend/img/oree-solar4.jpg"> </div>
	<button class="prev"></button>
	<button class="next"></button>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
	const slider = document.querySelector(".slider");
	const prevButton = document.querySelector(".prev");
	const nextButton = document.querySelector(".next");
	let startX;
	let currentX;
	let isDragging = false;
	let slideIndex = 0;
	let autoScrollInterval;
	nextButton.addEventListener("click", function() {
		slideIndex++;
		if(slideIndex >= slider.children.length) {
			slideIndex = slider.children.length - 1;
		}
		updateSlider();
	});
	prevButton.addEventListener("click", function() {
		slideIndex--;
		if(slideIndex < 0) {
			slideIndex = 0;
		}
		updateSlider();
	});
	slider.addEventListener("touchstart", function(e) {
		isDragging = true;
		clearInterval(autoScrollInterval);
		startX = e.touches[0].clientX;
	});
	slider.addEventListener("touchmove", function(e) {
		if(!isDragging) return;
		currentX = e.touches[0].clientX;
		const diff = currentX - startX;
		const translateX = -slideIndex * 100 + (diff / slider.clientWidth) * 100;
		slider.style.transform = `translateX(${translateX}%)`;
	});
	slider.addEventListener("touchend", function() {
		if(!isDragging) return;
		if(currentX > startX) {
			slideIndex--;
			if(slideIndex < 0) {
				slideIndex = 0;
			}
		} else {
			slideIndex++;
			if(slideIndex >= slider.children.length) {
				slideIndex = slider.children.length - 1;
			}
		}
		updateSlider();
		isDragging = false;
		startAutoScroll();
	});

	function updateSlider() {
		const translateX = -slideIndex * 100;
		slider.style.transform = `translateX(${translateX}%)`;
	}

	function startAutoScroll() {
		autoScrollInterval = setInterval(function() {
			if(!isDragging) {
				slideIndex++;
				if(slideIndex >= slider.children.length) {
					slideIndex = 0;
				}
				updateSlider();
			}
		}, 5000);
	}
	startAutoScroll();
});
</script>
<!-- mesaj -->
<div class="marquee" style="background: url(/resources/views/frontend/img/fyuıkygulok.jpg);background-size: 100% 100%; box-shadow: 0 0 30px rgba(44, 46, 48, 0.5);">
	<div> <img src="/resources/views/frontend/img/1870127.png" width="50" height="50">
		<p>Welcome to Oree Solar. Get a 5% bonus on deposits of $200 or more. Rent an Oree Solar device now and start earning in this world of technology. You can get information and support from customer services 24/7.</p>
	</div>
</div>
<!-- mesaj end -->
<div style="display: flex; justify-content: center;">
	<div class="containert">
		<a href="#" onclick="openPopup()">
			<div class="boxt1"> <img src="/resources/views/frontend/img2/5740394.webp" class="rotating-image"> <img src="/resources/views/frontend/img2/gctext.png" style="width: 92px;"> </div>
		</a>
		<div style="width:10px;"></div>
		<a href="/check-in">
			<div class="boxt2"> <img src="/resources/views/frontend/img2/6166440.webp" class="rotating-image2"> <img src="/resources/views/frontend/img2/check-in-text.png" style="width: 82px;"> </div>
		</a>
	</div>
</div>
<!-- spin -->
<div class="popup-container" id="popupContainer"> <span class="close-btn" onclick="closePopup()">&#10006;</span>
	<div class="popup-content">
		<!-- İçeriğinizi buraya ekleyin -->
		<div style="display: flex; justify-content: center; widt: 100%;">
			<h1 style="color: gold; margin: 0 auto; margin-top: 30px; display:none;">GIFT CODE</h1> </div>
		<div style="display: flex; justify-content: center; widt: 100%;">
			<div style="margin-top: 111px; width: 95%;">
				<div style="display: flex; justify-content: center; widt: 100%;">
					<div style="margin-top: 50px; padding: 10px;"> <?php if(isset($successMessage)): ?>
						<p id="myParagraph" class="success-message"><?php echo e($successMessage); ?></p> <?php elseif(isset($alreadyUsedMessage)): ?>
						<p id="myParagraph" class="error-message"><?php echo e($alreadyUsedMessage); ?></p> <?php elseif(isset($invalidCodeMessage)): ?>
						<p id="myParagraph" class="error-message"><?php echo e($invalidCodeMessage); ?></p> <?php endif; ?> </div>
				</div>
				<form class="custom-form" method="POST" action="/h5/index.php/home" style="margin-bottom: 30px;"> <?php echo csrf_field(); ?>
					<label class="form-label" for="message">Gift Code:</label>
					<input class="form-input" type="text" name="message" id="message" required placeholder="Please Enter Gift Code" oninput="convertToLowerCase(this)">
					<button class="form-button" type="submit">Get Bonus</button>
				</form>
				<div class="custom-form" style="background-color: rgba(0, 0, 0, 0.8);">
					<p class="hgh">Gift Code is Shared on Oree Solar Telegram Group Every Day at 13:00.</p>
					<p class="hgh">Please Join Telegram Chanel to Get Gift Codes: <a href="https://t.me/ponziscriptshop">t.me/ponziscriptshop</a></p>
					<p class="hgh">Each Code Can Be Used Only Once. Join the Group to Get New Gift Codes Every Day.</p>
				</div>
				<script>
				function convertToLowerCase(element) {
					element.value = element.value.toLowerCase();
				}
				</script>
				<script>
				setTimeout(function() {
					var myParagraph = document.getElementById('myParagraph');
					myParagraph.style.opacity = 0;
				}, 4000);
				</script>
			</div>
		</div>
	</div>
</div>
<script>
function openPopup() {
	document.getElementById('popupContainer').style.display = 'flex';
}

function closePopup() {
	document.getElementById('popupContainer').style.display = 'none';
}
</script>
<!-- spin end -->
<!-- spin view -->
<a href="/lucky-spin" onclick="openPopupk()">
	<div style="display: flex; justify-content: center; margin-top: 20px;">
		<div class="container959">
			<div class="content959"> <img class="rotatiner" src="/resources/views/frontend/img2/spinicon.png"> </div>
			<div class="content959"> <img class="rotatiner2" src="/resources/views/frontend/img2/luckyspin.png"> </div>
			<div class="content959"> </div>
		</div>
	</div>
</a>
<!-- spin view end -->
<div style="margin-bottom: 20px;"></div>
<div style="text-align: center; background: url(/resources/views/frontend/img/aertsad.jpg);background-size: 100% 100%; padding: 20px 20px 0 20px; border-radius: 10px; box-shadow: 0 0 30px rgba(44, 46, 48, 0.5);">
	<div style="display: flex; justify-content: center; align-items: center;">
		<div style="text-align: center;">
			<p class="rtf">Total Deposit</p>
			<p class="rtt"><?php echo e($currencySymbol); ?><?php echo e($dataCount['total_deposit']); ?></p>
		</div>
		<div class="uzun-cizgi"></div>
		<div style="text-align: center;">
			<p class="rtf">Total Investment</p>
			<p class="rtt"><?php echo e($currencySymbol); ?><?php echo e($dataCount['total_investment']); ?></p>
		</div>
		<div class="uzun-cizgi"></div>
		<div style="text-align: center;">
			<p class="rtf">total profit</p>
			<p class="rtt"><?php echo e($currencySymbol); ?><?php echo e($dataCount['total_profit']); ?></p>
		</div>
		<div class="uzun-cizgi"></div>
		<div style="text-align: center;">
			<p class="rtf">Total Withdrawal</p>
			<p class="rtt"><?php echo e($currencySymbol); ?><?php echo e($dataCount['total_withdraw']); ?></p>
		</div>
	</div>
	<div style="display: flex; justify-content: center; align-items: center;">
		<div style="text-align: center;">
			<p class="rtf">Total Reference</p>
			<p class="rtt"><?php echo e($dataCount['total_referral']); ?></p>
		</div>
		<div class="uzun-cizgi"></div>
		<div style="text-align: center;">
			<p class="rtf">Total Team Wins</p>
			<p class="rtt"><?php echo e($currencySymbol); ?><?php echo e($dataCount['total_referral_profit']); ?></p>
		</div>
		<div class="uzun-cizgi"></div>
		<div style="text-align: center;">
			<p class="rtf">Deposit Bonus</p>
			<p class="rtt"><?php echo e($currencySymbol); ?><?php echo e($dataCount['deposit_bonus']); ?></p>
		</div>
		<div class="uzun-cizgi"></div>
		<div style="text-align: center;">
			<p class="rtf">Investment Bonus</p>
			<p class="rtt"><?php echo e($currencySymbol); ?><?php echo e($dataCount['investment_bonus']); ?></p>
		</div>
	</div>
</div>
<div style="margin-bottom: 10px;"></div>
<div style="display: flex; justify-content: center;"> <img src="/resources/views/frontend/img2/about.png"> </div>
<div style="margin-bottom: 10px;"></div>
<div style="display: flex; justify-content: center;">
	<div class="video-container">
		<video controls>
			<source src="/resources/views/frontend/img2/oree-solar.mp4" type="video/mp4"> Your browser does not support the video element. </video>
	</div>
</div>
<div style="display: flex; justify-content: center; margin-top: 10px;">
	<button class="invisible-button" style="width: 100%;" onclick="window.location.href='/about'">More About Oree Solar</button>
	<!--<div style="width: 20px;"></div>
         <button class="invisible-button" onclick="window.location.href='https://oree-solar.com/h5'">Oree Solar Official Website</button> --></div>
<div style="margin-bottom: 40px;"></div> <?php $__env->startSection('script'); ?>
<script>
function copyRef() {
	/* Get the text field */
	var copyApi = document.getElementById("refLink");
	/* Select the text field */
	copyApi.select();
	copyApi.setSelectionRange(0, 999999999); /* For mobile devices */
	/* Copy the text inside the text field */
	document.execCommand('copy');
	$('#copy').text($('#copied').val())
}
</script> <?php $__env->stopSection(); ?> <?php echo $__env->make('frontend.footer.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> <?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u718774278/domains/1.ponziscript.com/public_html/resources/views/frontend/user/dashboard.blade.php ENDPATH**/ ?>