@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('succesfulTvetGraduates.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add Successful TVET Graduates</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/succesfulTvetGraduates" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add a Successful TVET Graduates.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>TVET Graduates Title:</strong>
                                <input type="text" name="title" class="form-control" placeholder="TVET Graduates Title">
                                @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>TVET Graduates Name:</strong>
                                <input type="text" name="name" class="form-control" placeholder="TVET Graduates name">
                                @error('name')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>TVET Graduates Content:</strong>
                                <textarea name="content" class="form-control summernote"></textarea>
                                @error('content')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <p>The image Dimensions should be as follows:  
                                    <ul>
                                        <li> Horizontal: 4500 px
                                        <li> Vertical: 2250 px 
                                        <li> Size: 10 Mo Maximum
                                    </ul>
                                </p>
                                <strong>TVET Graduates Picture:</strong>
                                <input type="file" name="picture" class="form-control" placeholder="TVET Graduates Picture">
                                @error('picture')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('succesfulTvetGraduates.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection