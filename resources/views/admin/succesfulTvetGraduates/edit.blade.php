@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('succesfulTvetGraduates.update',$succesfulTvetGraduates->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Edit Successful TVET Graduates</strong></h3>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to edit selected Successful TVET Graduate.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>TVET Graduate Title:</strong>
                                <input type="text" name="title" value="{{ $succesfulTvetGraduates->title }}" class="form-control"
                                    placeholder="{{ $succesfulTvetGraduates->title }}">
                                @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>TVET Graduate name:</strong>
                                <input type="text" name="name" value="{{ $succesfulTvetGraduates->name }}" class="form-control"
                                    placeholder="{{ $succesfulTvetGraduates->name }}">
                                @error('subtitle')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>TVET Graduate Content:</strong>
                                <textarea name="content" class="form-control"  rows="10" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                                {{ $succesfulTvetGraduates->content }}
                                </textarea>
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
                            <strong>TVET Graduate Picture:</strong>
                                <input type="file" name="picture" class="form-control" value="{{ $succesfulTvetGraduates->picture }}"  placeholder="TVET Graduate Picture">
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