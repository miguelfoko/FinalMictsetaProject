@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('news.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add News</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('news.store') }}" method="POST" class="php-email-form" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>News Title:</strong>
                        <input type="text" name="title" class="form-control" placeholder="News Title">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>News Subtitle:</strong>
                        <input type="text" name="subtitle" class="form-control" placeholder="News Subtitle">
                        @error('subtitle')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>News Content:</strong>
                        <textarea name="content" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;"> News Content</textarea>
                        @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Youtube Link:</strong>
                        <input type="text" name="link" class="form-control" placeholder="Youtube Link">
                        @error('link')
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
                        <strong>News Picture:</strong>
                        <input type="file" name="picture" class="form-control" placeholder="News Picture">
                        @error('picture')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('news.index') }}"> Back</a>
        </div>
    </div> 

@endsection