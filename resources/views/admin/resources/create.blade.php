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
                <div class="pull-left mb-2">
                    <h2>Add College Course Types</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('collegecoursetype.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Overview:</strong>
                        <textarea name="overview" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;"> 
                            Overview
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
                            Industry Fields
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
                            Type of Courses
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
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collegecoursetype.index') }}"> Back</a>
        </div>
    </div> 

@endsection