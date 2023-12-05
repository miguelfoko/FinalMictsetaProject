@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div> 
        @endif
        <form action="{{ route('collegecalendar.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add College Calendar</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/news" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add college calendar.</p>
                </div>
                <div class="panel-body">
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