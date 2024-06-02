@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('news.update',$news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Edit News</strong></h3>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to edit selected news.</p>
                </div>
                <div class="panel-body">
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
                                <textarea name="content" class="form-control summernote">
                                {{ $news->content }}
                                </textarea>
                                @error('content')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> 
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Publication date:</strong>
                                <input type="date" name="publicationDate" id="publicationDate" class="form-control" placeholder="{{ $news->publicationDate }}">
                                @error('publicationDate')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!--<div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Volume:</strong>

                                <select  name="volume" class="form-control ">
                                    {{ $last= 1 }}
                                    {{ $now = 100 }}

                                    @for ($i = $last; $i <= $now; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('volume')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>-->
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
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('news.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection