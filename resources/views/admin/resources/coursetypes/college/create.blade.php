@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('college.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add College</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('college.store') }}" method="POST" enctype="multipart/form-data">
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
                        <strong>Choose the program that the course belongs to:</strong>
                        <select name="regional_location_id" class="form-control ">
                            <option> Choose a regional location</option>
                            @foreach ($regionallocations as $regionallocation)  
                                <option value="{{$regionallocation->id}}"><strong> {{$regionallocation->region}}</strong></option>
                            @endforeach
                        </select>  
                        @error('regional_location_id')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <strong>Select the programs to be presented in this college:</strong>
                       
                        @foreach ($programs as $program)  
                            <label><input type="checkbox" name="programs[]" value="{{$program->id}}"> {{$program->title}}</label>
                        @endforeach 
                        @error('programs[]')
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