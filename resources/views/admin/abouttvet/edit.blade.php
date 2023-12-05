@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('adminAbouttvet.update',$abouttvet->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Edit About TVET</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="adminAbouttvet" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to edit About TVET.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">

                                <strong>What is TVET:</strong>
                                <textarea name="whatIsTvet" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                                {!! $abouttvet->whatIsTvet !!}
                                </textarea>
                                @error('whatIsTvet')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>TVET College Overview:</strong>
                                <textarea name="tvetOverview" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                                {!! $abouttvet->tvetOverview !!}
                                </textarea>
                                @error('tvetOverview')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group"> 
                                <strong>Public TVET College:</strong>
                                <textarea name="publicTvetColleges" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                                {!! $abouttvet->publicTvetColleges !!}
                                </textarea>
                                @error('publicTvetColleges')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group"> 
                                <strong>TVET College Administration:</strong>
                                <textarea name="tvetCollegeAdministration" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                                {!! $abouttvet->tvetCollegeAdministration !!}
                                </textarea>
                                @error('tvetCollegeAdministration')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group"> 
                                <strong>Private College:</strong>
                                <textarea name="privateTvetColleges" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                                {!! $abouttvet->privateTvetColleges !!}
                                </textarea>
                                @error('privateTvetColleges')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('adminAbouttvet.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection