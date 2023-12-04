@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('subjects.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add Course</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/news" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add a Course.</p>
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