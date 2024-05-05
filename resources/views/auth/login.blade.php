@extends('layouts.login_register')

@section('content')
<div class="login-title"><strong>Welcome</strong>, Please login.</div>
@if ($message = Session::get('error'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
<form method="POST" class="form-horizontal" action="{{ route('login') }}">
    @csrf
    <div class="form-group">
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="fa fa-envelope"></span>
                </div>
                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" required autocomplete="email" autofocus/>
            </div>
        </div>
        <div class="col-md-12">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="fa fa-lock"></span>
                </div>                                
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password"/>
            </div>
        </div>
        <div class="col-md-12">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6 offset-md-4">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>

            @if (Route::has('password.request'))
                <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>-->
            @endif
        </div>
    </div>
</form>
                
@endsection
