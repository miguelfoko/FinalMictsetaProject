@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('admintvetcollegetimes.update',$tvetcollegetimes->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Edit TVET College Times</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/news" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to edit TVET college times.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Title:</strong>
                                <input type="text" name="title" value="{{ $tvetcollegetimes->title }}" class="form-control" 
                                placeholder="{{ $tvetcollegetimes->title }}">
                                @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Publication Year:</strong>

                                <select id="year" name="publicationYear" class="form-control ">
                                    {{ $last= date('Y')-120 }}
                                    {{ $now = date('Y') }}

                                    @for ($i = $now; $i >= $last; $i--)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('publicationYear')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Publication Month:</strong>

                                <select id="year" name="publicationMonth" class="form-control ">
                                    <option >Choose here</option>
                                    <option value="January">January</option>
                                    <option value="February">February</option>
                                    <option value="March">March</option>
                                    <option value="April">April</option>
                                    <option value="May">May</option>
                                    <option value="June">June</option>
                                    <option value="July">July</option>
                                    <option value="August">August</option>
                                    <option value="September">September</option>
                                    <option value="October">October</option>
                                    <option value="November">November</option>
                                    <option value="December">December</option>                            
                                </select>
                                @error('publicationMonth')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Volume:</strong>

                                <select  name="volume" class="form-control ">
                                    {{ $last= 1 }}
                                    {{ $now = 100 }}

                                    @for ($i = $last; $i <= $now; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                                @error('volume')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Cover page:</strong>
                                <input type="file" name="coverPage" class="form-control" >
                                @error('coverPage')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>File:</strong>
                                <input type="file" name="file" class="form-control" >
                                @error('file')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{route('admintvetcollegetimes.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection