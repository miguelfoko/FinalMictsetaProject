@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('collegecalendar.update',$collegecalendar->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Edit College Calendar</strong></h3>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to edit college calendar.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        
                        <div class="col-xs-8 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Event Title:</strong>
                                <input type="text" name="eventtitle" value="{{ $collegecalendar->eventtitle }}" class="form-control" 
                                placeholder="{{ $collegecalendar->eventtitle }}">
                                @error('eventtitle')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-8 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Starting date:</strong>
                                <input type="date" name="startdate" value="{{ $collegecalendar->startdate }}" class="form-control" 
                                placeholder="{{ $collegecalendar->startdate }}">
                                @error('startdate')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div class="col-xs-8 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Ending date: </strong>
                                    <input type="date" name="enddate" value="{{ $collegecalendar->enddate }}" class="form-control" 
                                    placeholder="{{ $collegecalendar->enddate }}">
                                    @error('enddate')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('collegecalendar.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection