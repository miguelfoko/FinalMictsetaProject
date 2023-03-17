@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('coursetype.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Course Type</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('coursetype.update',$coursetype->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
             <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Type:</strong>
                    <textarea name="type" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                        {!! $coursetype->type !!}}
                    </textarea>
                        @error('type')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                    <strong>Description:</strong>
                    <textarea name="description" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                        {!! $coursetype->description !!}
                    </textarea>
                        @error('description')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Duration:</strong>
                        <textarea name="duration" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;"> 
                        {!! $coursetype->duration !!}
                        </textarea>
                        @error('duration')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Qualification:</strong>
                        <textarea name="qualification" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;"> 
                        {!! $coursetype->qualification !!}
                        </textarea>
                        @error('qualification')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Admission Requirements:</strong>
                        <textarea name="admissionRequirements" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;"> 
                        {!! $coursetype->admissionRequirements !!}
                        </textarea>
                        @error('admissionRequirements')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Resources:</strong>
                        <textarea name="resources" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;"> 
                        {{ $coursetype->resources }}
                        </textarea>
                        @error('resources')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>

@endsection