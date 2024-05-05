@extends('layouts.login_register')

@section('content')
<div class="login-title"><strong>Welcome</strong>, Please fill the form to register.</div>
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
<form method="POST" class="form-horizontal" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="fa fa-user"></span>
                </div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{ __('Name') }}" required autocomplete="name" autofocus/>
            </div>
        </div>
        <div class="col-md-12">
        @error('name')
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
                    <span class="fa fa-envelope"></span>
                </div>
                <input id="email" type="email" class="form-control  @error('email') is-invalid @enderror" placeholder="{{ __('Email Address') }}" name="email" required autocomplete="email" />
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
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"  placeholder="{{ __('Password') }}" name="password" required autocomplete="new-password"/>
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

    <div class="form-group">
        <div class="col-md-12">
            <div class="input-group">
                <div class="input-group-addon">
                    <span class="fa fa-lock"></span>
                </div>                                
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="{{ __('Confirm Password') }}" required autocomplete="new-password"/>
            </div>
        </div>
    </div>

    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Register') }}
            </button>
        </div>
    </div>
</form>
@endsection
