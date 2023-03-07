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
                <div class="pull-left">
                    <h2>Edit About TVET</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('adminAbouttvet.update',$abouttvet->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">

                        <strong>What is TVET:</strong>
                        <textarea name="whatIsTvet" class="form-control"  rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                        {{!! $abouttvet->whatIsTvet !!}}
                        </textarea>
                        @error('whatIsTvet')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>What is TVET:</strong>
                        <textarea name="tvetOverview" class="form-control"  rows="10" style="white-space: pre-wrap; text-indent: 50px;">
                        {{!! $abouttvet->tvetOverview !!}}
                        </textarea>
                        @error('tvetOverview')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>

@endsection