@extends('frontend.layouts.user')
@section('title')
    {{ __('Change Password') }}
@endsection
<div class="uwe">
    <p style="height: 5px;"></p>
    <img src="/resources/views/frontend/img2/close.png" style="position: absolute; top: 15; left: 15; width: 30px;" onclick="window.location.href='/h5/index.php/menu'">
    <h3 class="title" style="display: flex; justify-content: center; font-size: 20px; color: white;">{{ __('Change Password') }}</h3>
</div>
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="site-card">
                <div class="site-card-body">
                    <div class="progress-steps-form">
                        <form action="{{ route('user.new.password') }}" method="post">
                            @csrf

                            @foreach ($errors->all() as $error)
                                @php
                                    notify()->warning($error);
                                @endphp
                            @endforeach

                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <label for="exampleFormControlInput1"
                                           class="form-label">{{ __('Current Password') }}</label>
                                    <div class="input-group">
                                        <input type="password" name="current_password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    <label for="exampleFormControlInput1"
                                           class="form-label">{{ __('New Password') }}</label>
                                    <div class="input-group">
                                        <input type="password" name="new_password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12">
                                    <label for="exampleFormControlInput1"
                                           class="form-label">{{ __('Confirm Password') }}</label>
                                    <div class="input-group">
                                        <input type="password" name="new_confirm_password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-12" style="display: flex; justify-content: center;">
                                    <button style="border: 1px solid #15FFDF; border-radius: 10px; background-color: #0E0E0E; color: #15FFDF; font-size: 15px; font-weight: bold;" type="submit" class="site-btn blue-btn">{{ __('Change Password') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
