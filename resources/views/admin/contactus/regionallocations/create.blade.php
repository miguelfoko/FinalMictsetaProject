@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('regionallocations.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2"> 
                    <h2>Add Regional Location</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div> 
        @endif
        <form action="{{ route('regionallocations.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row"> 
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Colleges:</strong>
                        <input type="text" name="region" class="form-control" placeholder="Enter the Region">
                        @error('region')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Principal:</strong>
                        <input type="text" name="principal" class="form-control" placeholder="Enter the Principal full name">
                        @error('principal')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Principal Emails addresses (Separated by a "/"):</strong>
                        <input type="text" name="principalEmails" class="form-control" placeholder="Enter the Principal emails">
                        @error('principalEmails')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Principal Assistant:</strong>
                        <input type="text" name="principalAssistant" class="form-control" placeholder="Enter the Principal Assistant full name">
                        @error('principalAssistant')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Principal Assistant Emails addresses (Separated by a "/"):</strong>
                        <input type="text" name="principalAssistantEmails" class="form-control" placeholder="Enter the Principal Assistant emails">
                        @error('principalAssistantEmails')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Address:</strong>
                        <input type="text" name="address" class="form-control" placeholder="Enter the address">
                        @error('address')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>City:</strong>
                        <input type="text" name="city" class="form-control" placeholder="Enter the city">
                        @error('city')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Phones (Enter phone numbers separated by a "/"):</strong>
                        <input type="text" name="phone" class="form-control" placeholder="Enter the Phone numbers">
                        @error('phone')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Website Address:</strong>
                        <input type="text" name="websiteAddress" class="form-control" placeholder="Enter the Website Address">
                        @error('websiteAddress')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>latitude:</strong>
                        <input type="text" name="latitude" class="form-control" placeholder="Enter the latitude">
                        @error('latitude')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>longitude:</strong>
                        <input type="text" name="longitude" class="form-control" placeholder="Enter the longitude">
                        @error('longitude')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>

        </form>
    </div>
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('regionallocations.index') }}"> Back</a>
        </div>
    </div> 

@endsection