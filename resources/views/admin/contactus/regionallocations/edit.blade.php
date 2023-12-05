@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('regionallocations.update',$regionallocations->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Edit Regional Location</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="{{ route('regionallocations.index') }}" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to edit selected regional location.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Colleges:</strong>
                                <input type="text" name="region" value="{{ $regionallocations->region }}" 
                                class="form-control">
                                @error('region')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Principal:</strong>
                                <input type="text" name="principal" value="{{ $regionallocations->principal }}"
                                class="form-control">
                                @error('principal')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Principal Emails addresses (Separated by a "/"):</strong>
                                <input type="text" name="principalEmails" value="{{ $regionallocations->principalEmails }}" 
                                class="form-control" >
                                @error('principalEmails')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Principal Assistant:</strong>
                                <input type="text" name="principalAssistant" value="{{ $regionallocations->principalAssistant }}"
                                class="form-control" >
                                @error('principalAssistant')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Principal Assistant Emails addresses (Separated by a "/"):</strong>
                                <input type="text" name="principalAssistantEmails" value="{{ $regionallocations->principalAssistantEmails }}"
                                class="form-control" >
                                @error('principalAssistantEmails')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Address:</strong>
                                <input type="text" name="address" value="{{ $regionallocations->address }}" 
                                class="form-control" >
                                @error('address')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>City:</strong>
                                <input type="text" name="city" value="{{ $regionallocations->city }}" 
                                class="form-control" >
                                @error('city')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Phones (Enter phone numbers separated by a "/"):</strong>
                                <input type="text" name="phone" value="{{ $regionallocations->phone }}" 
                                class="form-control" >
                                @error('phone')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Website Address:</strong>
                                <input type="text" name="websiteAddress" value="{{ $regionallocations->websiteAddress }}"
                                class="form-control">
                                @error('websiteAddress')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Latitude:</strong>
                                <input type="text" name="latitude" value="{{ $regionallocations->latitude }}" 
                                class="form-control" >
                                @error('latitude')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Longitude:</strong>
                                <input type="text" name="longitude" value="{{ $regionallocations->longitude }}" 
                                class="form-control" >
                                @error('longitude')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('regionallocations.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection