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
                <div class="pull-left">
                    <h2>Edit News</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>News Title:</strong>
                        <input type="text" name="title" value="{{ $news->title }}" class="form-control"
                            placeholder="{{ $news->title }}">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>News Subitle:</strong>
                        <input type="text" name="subtitle" value="{{ $news->subtitle }}" class="form-control"
                            placeholder="{{ $news->subtitle }}">
                        @error('subtitle')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>News Content:</strong>
                        <textarea name="content" class="form-control"  rows="10" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                         {{ $news->content }}
                        </textarea>
                        @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Youtube Link:</strong>
                        <input type="text" name="link" value="{{ $news->link }}" class="form-control" placeholder="Youtube Link">
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
                        <input type="file" name="picture" class="form-control" value="{{ $news->picture }}"  placeholder="News Picture">
                        @error('picture')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>

@endsection