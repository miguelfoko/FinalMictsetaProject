@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collegecalendar.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2"> 
                    <h2>Add College Calendar</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div> 
        @endif
        <form action="{{ route('collegecalendar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row"> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Event Title:</strong>
                        <input type="text" name="eventtitle" class="form-control" placeholder="Event title">
                        @error('eventtitle')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Starting date:</strong>
                        <input type="date" name="startdate" class="form-control" placeholder="Start Date">
                        @error('startdate')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Ending date: </strong>
                        <input type="date" name="enddate" class="form-control" placeholder="End Date">
                        @error('enddate')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

            </div>
    
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
 
        </form>
    </div>
    <br><br>
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('collegecalendar.index') }}"> Back</a>
        </div>
    </div> 

@endsection