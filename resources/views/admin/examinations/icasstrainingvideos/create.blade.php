@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div> 
        @endif
        <form action="{{ route('icasstrainingvideos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add ICASS Training Video</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/news" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add ICASS training Video.</p>
                </div>
                <div class="panel-body">
                    <div class="row"> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group"> 
                                <strong>Title:</strong>
                                <input type="text" name="title" class="form-control" placeholder="TVET College Times Title">
                                @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Module:</strong>

                                <select  name="module" class="form-control ">
                                    {{ $last= 1 }}
                                    {{ $now = 100 }}

                                    @for ($i = $last; $i <= $now; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>

                                @error('module')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Session:</strong>

                                <select  name="session" class="form-control ">
                                    {{ $last= 1 }}
                                    {{ $now = 100 }}

                                    @for ($i = $last; $i <= $now; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>

                                @error('session')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Video link (Youtube):</strong>
                                <input type="url" name="video" class="form-control" >
                                @error('video')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('icasstrainingvideos.index') }}"> Cancel</a>
                </div>
            </div>
        </form>

        <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>How to obtain the video Youtube Link above?</strong></h3>
                    <br><br>
                    <ol class="panel-controls">
                        <li> On a computer, go to the YouTube video that you want to embed.</li>
                        <li> Under the video, click Share .</li>
                        <li> Click Embed.</li>
                        <li> From the box that appears, copy the url link that appears in the "src" field.</li>
                        <li> Paste the copied url in the "Video link (Youtube)" field of the above form</li>
                    </ol>
                
                </div>
        </div>
    </div>

@endsection