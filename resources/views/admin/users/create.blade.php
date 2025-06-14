@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('users.store') }}" method="POST" >
            @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add user</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/users" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add a user.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
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

                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('users.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection