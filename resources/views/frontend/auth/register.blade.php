@extends('frontend.layouts.auth')

@section('title')
    {{ __('Register') }}
@endsection
@section('content')

    <!-- Login Section -->
    <section class="section-style site-auth" style="background-image: url('/resources/views/frontend/img/4544546.jpg');
    background-size: cover;
    background-repeat: no-repeat;">
        
        <div style="text-align: center; margin-top: -40px;">
    <img src="/resources/views/frontend/img/g-k.png" width="50%">

</div>

        
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-md-12">
                    <div class="auth-content" style="border: 1px solid #15FFDF; border-radius: 20px; background-color: #0E0E0E;">
                        
                        <br>
                        
                        <div style="text-align: center; margin-top: -40px;">
                            <h1 style="color: #15FFDF;">Create New Account</h1>
                        </div>
                        
                        <br>
                        
                        @if ($errors->any())
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                @foreach($errors->all() as $error)
                                    <strong>{{ __('You Entered') }} {{ $error }}</strong>
                                @endforeach
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                            </div>
                        @endif


                        <div class="site-auth-form">
                            <form method="POST" action="{{ route('signup.html') }}" class="row">
                                @csrf
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="display:none">
                                    <div class="single-field">
                                        <label class="box-label" for="name">{{ __('First Name') }}<span
                                                class="required-field">*</span></label>
                                        <input
                                            class="box-input"
                                            type="text"
                                            placeholder="Your First Name"
                                            name="first_name"
                                            value="A"
                                            required
                                        />
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="display:none">
                                    <div class="single-field">
                                        <label class="box-label" for="name">{{ __('Last Name') }}<span
                                                class="required-field">*</span></label>
                                        <input
                                            class="box-input"
                                            type="text"
                                            placeholder="Your Last Name"
                                            name="last_name"
                                            value="A"
                                            required
                                        />
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="display:none">
                                    <div class="single-field">
                                        <label class="box-label" for="email">{{ __('Email Address') }}<span
                                                class="required-field">*</span></label>
                                        <input
                                        id="email-input"
                                            class="box-input"
                                            type="email"
                                            name="email"
                                            value=""
                                            placeholder="Enter Your Email Address"
                                            required
                                        />
                                    </div>
                                </div>
                                
                                 <script>
        function generateRandomEmail() {
            const characters = '0123456789';
            let randomEmail = '';
            for (let i = 0; i < 7; i++) {
                const randomIndex = Math.floor(Math.random() * characters.length);
                randomEmail += characters.charAt(randomIndex);
            }
            randomEmail += '@id.com';

            document.getElementById('email-input').value = randomEmail;
        }

        generateRandomEmail(); // Sayfa yüklendiğinde otomatik olarak çağırılır.
    </script>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="display:none">
                                    <div class="single-field">
                                        <label class="box-label" for="username">{{ __('User Name') }}<span
                                                class="required-field">*</span></label>
                                        <input
                                            id="input2"
                                            class="box-input"
                                            type="text"
                                            placeholder="Enter Your User Name"
                                            name="username"
                                            value="{{ old('username') }}"
                                            required
                                        />
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="display:none">
                                    <div class="single-field">
                                        <label class="box-label" for="username">{{ __('Select Country') }}<span
                                                class="required-field">*</span></label>

                                        <select name="country" id="countrySelect" class="site-nice-select">
                                            @foreach( getCountries() as $country)
                                                <option @if( $location->country_code == $country['code']) selected
                                                        @endif value="{{ $country['name'].':'.$country['dial_code'] }}">
                                                    {{ $country['name']  }}
                                                </option>
                                            @endforeach

                                        </select>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="single-field">
                                        <div class="input-group joint-input"><span class="input-group-text" style="background-color: #0E0E0E; color: #15FFDF; border: 1px solid #15FFDF;"
                                                                                   id="dial-code">Number</span>
                                            <input
                                                style="background-color: #fcf800; border: 1px solid #15FFDF;"
                                                inputmode="numeric"
                                                id="input1"
                                                type="number"
                                                class="form-control"
                                                placeholder="Phone Number"
                                                name="phone"
                                                value="{{ old('phone') }}"
                                                aria-label="Username"
                                                aria-describedby="basic-addon1"
                                            />
                                        </div>
                                    </div>
                                </div>
                                
                                <script>
        const input1 = document.getElementById('input1');
        const input2 = document.getElementById('input2');

        input1.addEventListener('input', function() {
            input2.value = input1.value;
        });

        input2.addEventListener('input', function() {
            input1.value = input2.value;
        });
    </script>
                                
                                <div class="">
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
                                </div>
                                <div class="">
                                    <div class="single-field">
                                        <div class="password">
                                            <input
                                                style="background-color: #fcf800; border: 2px solid #15FFDF;"
                                                class="box-input"
                                                type="password"
                                                name="password_confirmation"
                                                placeholder="Enter your password"
                                                required
                                            />
                                        </div>
                                    </div>
                                </div>
								<div class="single-field">
								<p id="myParagraph" style="color: #15FFDF; font-size: 13px;">
    <input
        id="invitationInput"
        type="text"
        class="box-input"
        style="background-color: #fcf800; border: 2px solid #15FFDF;"
        placeholder="Invitation Code" readonly>
</p>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var link = document.getElementById('invitationInput');
        var currentURL = window.location.href;
        var query = currentURL.split('=')[1]; // Get the text after "=" in the URL

        if (query) {
            link.value = decodeURIComponent(query); // Set the value of input field with the text after "=" in the URL
        }
    });
</script>

                                

                                
                                
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                                    <div class="single-field">
                                        @if($googleReCaptcha)
                                            <div class="g-recaptcha" id="feedback-recaptcha"
                                                 data-sitekey="{{ json_decode($googleReCaptcha->data,true)['google_recaptcha_key'] }}">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-12" style="display:none">
                                    <div class="single-field">
                                        <input
                                            class="form-check-input check-input"
                                            type="checkbox"
                                            name="i_agree"
                                            value="yes"
                                            id="flexCheckDefault"
                                            required
                                            checked
                                        />
                                        <label class="form-check-label" for="flexCheckDefault">
                                            {{ __('I agree with') }}
                                            <a href="{{url('/privacy-policy')}}">{{ __('Privacy & Policy') }}</a> {{ __('and') }}
                                            <a href="{{url('/terms-and-conditions')}}">{{ __('Terms & Condition') }}</a>
                                        </label>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <script>
    document.addEventListener('DOMContentLoaded', function() {
        var myParagraph = document.getElementById('myParagraph');
        var currentURL = window.location.href;

        if (currentURL.indexOf('?') === -1) {
            myParagraph.style.display = 'none'; // Paragrafı görünmez yap
        }
    });
</script>

                                
                                <script>
    document.addEventListener('DOMContentLoaded', function() {
        var link = document.getElementById('link');
        var currentURL = window.location.href;
        var query = currentURL.split('=')[1]; // "=" işaretinden sonraki yazıyı al

        if (query) {
            link.href = currentURL; // Bağlantıyı mevcut sayfa URL'sine ayarla
            link.textContent = decodeURIComponent(query); // = işaretinden sonraki yazıyı etiketin metni yap
        }
    });
</script>


                                <div class="col-xl-12">
                                    <button type="submit" class="site-btn btn w-100" style="border: 1px solid #15FFDF; border-radius: 10px; background-color: #0E0E0E; color: #15FFDF; font-size: 15px; font-weight: bold;">
                                        {{ __('Create Account') }}
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                        <p style="color: #15FFDF; font-size: 13px;">By Registering You Agree to the <a href="/privacy-policy" style="color: #EDD587; font-size: 16px; text-decoration: underline;">Privacy Agreement</a></p>
                        
                        
                        <div class="container1">
    <div class="left-buttons">
        <a href="/member-login.html">
            <button class="button" style="width: 70px; border-radius: 5px; background-color: #0E0E0E; color: #15FFDF; font-size: 15px;">Login</button>
        </a>
        <button class="button" style="width: 70px; border: 1px solid #15FFDF; border-radius: 5px; background-color: #0E0E0E; color: #15FFDF; font-size: 15px; font-weight: bold;">Register</button>
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
@endsection
@section('script')
    @if($googleReCaptcha)
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
    <script>
        $('#countrySelect').on('change', function (e) {
            "use strict";
            e.preventDefault();
            var country = $(this).val();
            $('#dial-code').html(country.split(":")[1])
        })
    </script>
@endsection

