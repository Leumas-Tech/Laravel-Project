@extends('backend.auth.index')
@section('title')
    {{ __('Login') }}
@endsection
@section('auth-content')
    <div class="login" style="display: flex; justify-content: center; background-color: #014380;">
        <div class="login-content">
            <div class="auth-body">

                <form action="{{ route('admin.login') }}" method="post">
                    @csrf
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
                        <button class="site-btn primary-btn" type="submit" style="background-color: #182c40;">{{ __('Admin Login') }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
