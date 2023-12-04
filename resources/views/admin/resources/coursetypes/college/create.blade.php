@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('college.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add College</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/news" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add a College.</p>
                </div>
                <div class="panel-body">
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
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('college.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection