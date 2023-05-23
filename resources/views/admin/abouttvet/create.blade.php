@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('adminAbouttvet.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add About TVET</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('adminAbouttvet.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>What is TVET:</strong>
                        <textarea name="whatIsTvet" class="form-control" data-edit="fontName Arial" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                           
                        </textarea>
                        @error('whatIsTvet')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group"> 
                        <strong>TVET College Overview:</strong>
                        <textarea name="tvetOverview" class="form-control"  id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                           
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
                        
                        </textarea>
                        @error('privateTvetColleges')
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
            <a class="btn btn-success" href="{{ route('adminAbouttvet.index') }}"> Back</a>
        </div>
    </div> 

@endsection