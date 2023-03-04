@extends('layouts.app')

@section('content')


<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('footer.index') }}"> Back</a>
        </div>
    </div> 

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Footer Content</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('footer.update',$footer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Footer Title:</strong>
                        <input type="text" name="title" value="{{ $footer->title }}" class="form-control"
                            placeholder="{{ $footer->title }}">
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <divclass="col-xs-12 col-sm-12 col-md-12"></div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </form>
    </div>


@endsection

