@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collegecoursetype.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit College Course Type</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('collegecoursetype.update',$collegecoursetype->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Overview:</strong>
                    <textarea name="overview" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                        {{ $collegecoursetype->overview }}
                    </textarea>
                        @error('overview')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Industry Fields:</strong>
                        <textarea name="industryFields" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;"> 
                        {{ $collegecoursetype->industryFields }}
                        </textarea>
                        @error('industryFields')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Type of Courses:</strong>
                        <textarea name="typeOfCourses" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;"> 
                            {{ $collegecoursetype->typeOfCourses }}
                        </textarea>
                        @error('typeOfCourses')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div> 
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>

@endsection