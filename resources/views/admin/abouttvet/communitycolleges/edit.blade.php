@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Community Colleges Information</h2>
                </div>
            </div> 
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('communitycolleges.update',$communitycolleges->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add Community Colleges Information</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/communitycolleges" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add community college information.</p>
                </div>
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">

                                <strong>Content:</strong>
                                <textarea name="content" class="form-control summernote">
                                {!! $communitycolleges->content !!}
                                </textarea>
                                @error('content')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                        <label class="col-md-5 col-xs-12 control-label"></label>
                        <button type="submit" class="btn btn-success ml-3">Submit</button>
                        <a class="btn btn-danger" href="{{ route('communitycolleges.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection