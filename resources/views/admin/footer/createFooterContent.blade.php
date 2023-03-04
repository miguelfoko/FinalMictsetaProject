@extends('layouts.app')

@section('content')
<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('footer.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Footer content</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('footerContent.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <select class="form-control" name="footer_id">
                        <option>Select Footer element</option>
                            @foreach ($footerElement as $key => $value)
                                <option value="{{ $key }}" > 
                                            {{ $value }}    
                                </option> 
                            @endforeach
                    </select>
                </div>  
                    <div class="form-group">
                        <strong>Footer Content:</strong>
                        <textarea name="value" class="form-control"  rows="10"> Footer Value</textarea>
                        @error('value')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                 <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('footer.index') }}"> Back</a>
        </div>
    </div> 


@endsection