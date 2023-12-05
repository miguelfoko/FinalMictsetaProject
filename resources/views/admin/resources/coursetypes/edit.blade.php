@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('coursetype.update',$coursetype->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Edit Program</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/news" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to edit a program.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Type:</strong>
                                <input type="text" name="type" value="{{$coursetype->type}}" class="form-control">
                                @error('type')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                
                                <strong>Choose the domain that the course belongs to:</strong>
                                <select name="idprogram">
                                    <option> Choose a domain</option>
                                    @foreach ($programs as $program)  
                                        <option value="{{$program->id}}"> {{$program->title}}</option>
                                    @endforeach
                                </select>
                                
                                @error('idprogram')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                        
                            <div class="form-group">
                                <strong>Description:</strong>
                                <input type="text" name="description" value="{{ $coursetype->description }}" class="form-control">
                                @error('description')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                    
                        
                            <div class="form-group">
                                <strong>Duration:</strong>
                                <input type="text" name="duration" value="{{ $coursetype->duration }}" class="form-control">
                                @error('duration')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                    
                            <div class="form-group">
                                <strong>Qualification:</strong>
                                <input type="text" name="qualification" value="{{ $coursetype->qualification }}" class="form-control">
                                @error('qualification')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <div class="form-group">
                                <strong>Admission Requirements:</strong>
                                <input type="text" name="admissionRequirements" value="{{ $coursetype->admissionRequirements }}" class="form-control">
                                @error('admissionRequirements')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                    
                            <div class="form-group">
                                <strong>Resources:</strong>
                                <input type="text" name="resources" value="{{ $coursetype->resources }}" class="form-control">
                                @error('resources')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('coursetype.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection