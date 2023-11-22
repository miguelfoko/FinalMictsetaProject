@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('coursetype.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Program</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('coursetype.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Type:</strong>
                        <input type="text" name="type" class="form-control">
                        @error('type')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <strong>Choose the Domain that the course belongs to:</strong>
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
                        <input type="text" name="description" class="form-control">
                        @error('description')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
               
                    <div class="form-group">
                        <strong>Duration:</strong>
                        <input type="text" name="duration" class="form-control">
                        @error('duration')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
               
                    <div class="form-group">
                        <strong>Qualification:</strong>
                        <input type="text" name="qualification" class="form-control">
                        @error('qualification')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <strong>Admission Requirements:</strong>
                        <input type="text" name="admissionRequirements" class="form-control">
                        @error('admissionRequirements')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <strong>Resources:</strong>
                        <input type="text" name="resources" class="form-control">
                        @error('resources')
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
            <a class="btn btn-success" href="{{ route('coursetype.index') }}"> Back</a>
        </div>
    </div> 

@endsection