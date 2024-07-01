@if(!Auth::check())
    <?php
        header("Location: " . url('/member-login.html'));
        exit();
    ?>
@endif
@extends('frontend.layouts.user')
@section('title')
    {{ __('checkin') }}
@endsection
@section('content')


<style>
        /* Tam sayfa genişliğinde ve yüksekliğinde yeşil arka plan */
        body {
            margin: 0;
            padding: 0;
        }

        .green-background {
            width: 100vw;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1; /* Diğer içeriklerin önünde olması için */
            padding: 0;
    background-image: url('/resources/views/frontend/img2/check-in-bckrnd.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center; /* Resmi tam ortadan görüntülemek için */
    height: 100vh;
        }
        /* Container div */
        .content-container {
            display: flex;
            flex-direction: column; /* İçerikleri alt alta dizer */
            align-items: center; /* İçerikleri yatayda ortalar */
            justify-content: center; /* İçerikleri dikeyde ortalar */
        }

        /* İçeriklerin stilini özelleştir */
        .content-item {
            margin: 10px;
            padding: 20px;
            background-color: lightblue;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        .error {
     color: #ff8521;
     font-size: 22px;
     font-weight: bold;
     background-color: rgba(11, 18, 2, 0.5);
     box-shadow: 0 0 10px rgba(96, 36, 237, 0.5);
     border-radius: 3px;
 }
 
 .success {
     color: #ccff00;
     font-size: 22px;
     font-weight: bold;
     background-color: rgba(11, 18, 2, 0.5);
     box-shadow: 0 0 10px rgba(96, 36, 237, 0.5);
     border-radius: 3px;
 }
 
 .close-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 20px;
            cursor: pointer;
        }
    </style>


<div class="green-background">
    
    <span class="close-btn" onclick="window.location.href='/h5/index.php/home'">&#10006;</span>
    
    <div style="margin-top: 120px;"></div>
    
    
    
    <div style="margin-top: -50px; display: flex; justify-content: center;">
        <img src="/resources/views/frontend/img2/box-png.webp">
    </div>
    
    
    <div class="content-container" style="margin-top: 10px;">
        <div>
             @if(session('successMessage'))
        <p class="success">{{ session('successMessage') }}</p>
    @endif

    @if(session('errorMessage'))
        <p class="error">{{ session('errorMessage') }}</p>
    @endif
        </div>

        <div  style="margin-top: 20px;">
                @auth 
         <a href="{{ url('/checkin') }}">
              <button class="Btn">CHECK-IN</button>
        </a>
               @endauth 
        </div>
    </div>
    
    
    
    <style>
                .Btn {
  position: relative;
  width: 150px;
  height: 55px;
  border-radius: 45px;
  border: none;
  background-color: rgb(151, 95, 255);
  color: white;
  box-shadow: 0px 10px 10px rgb(210, 187, 253) inset,
  0px 5px 10px rgba(5, 5, 5, 0.212),
  0px -10px 10px rgb(124, 54, 255) inset;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.Btn::before {
  width: 70%;
  height: 2px;
  position: absolute;
  background-color: rgba(250, 250, 250, 0.678);
  content: "";
  filter: blur(1px);
  top: 7px;
  border-radius: 50%;
}

.Btn::after {
  width: 70%;
  height: 2px;
  position: absolute;
  background-color: rgba(250, 250, 250, 0.137);
  content: "";
  filter: blur(1px);
  bottom: 7px;
  border-radius: 50%;
}

.Btn:hover {
  animation: jello-horizontal 0.9s both;
}

@keyframes jello-horizontal {
  0% {
    transform: scale3d(1, 1, 1);
  }

  30% {
    transform: scale3d(1.25, 0.75, 1);
  }

  40% {
    transform: scale3d(0.75, 1.25, 1);
  }

  50% {
    transform: scale3d(1.15, 0.85, 1);
  }

  65% {
    transform: scale3d(0.95, 1.05, 1);
  }

  75% {
    transform: scale3d(1.05, 0.95, 1);
  }

  100% {
    transform: scale3d(1, 1, 1);
  }
}

            </style>





</div>

   

















@endsection
