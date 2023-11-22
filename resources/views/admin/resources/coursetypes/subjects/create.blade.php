@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('subjects.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Course</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Title:</strong>
                        <input type="text" name="title" class="form-control">
                       
                        @error('title')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div> 

                    <div class="form-group">
                        <strong>Choose the program that the subject belongs to:</strong>
                        <select name="coursetype_id" class="form-control ">
                            <option> Choose a program</option>
                            @foreach ($coursetypes as $coursetype)  
                                <option value="{{$coursetype->id}}"><strong> {!!$coursetype->type!!}</strong></option>
                            @endforeach
                        </select>  
                        @error('coursetype_id')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <strong>Select the Level for this course:</strong>

                        <select name="level" class="form-control ">
                            <option> Choose the Level</option>
                            <option value="N1"><strong> N1</strong></option>
                            <option value="N2"><strong> N2</strong></option>
                            <option value="N3"><strong> N3</strong></option>
                            <option value="N4"><strong> N4</strong></option>
                            <option value="N5"><strong> N5</strong></option>
                            <option value="N6"><strong> N6</strong></option>
                        </select>                        
                        @error('level')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
               
            </div>
        </form>
    </div>
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('college.index') }}"> Back</a>
        </div>
    </div> 

@endsection