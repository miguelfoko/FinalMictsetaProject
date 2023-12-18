@extends('layouts.app')

@section('content')
<!-- new content-->

<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('news.store') }}" method="POST"  enctype="multipart/form-data">
            @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add news</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/news" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add a news.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>News Title:</strong>
                                <input type="text" name="title" class="form-control" placeholder="News Title">
                                @error('title')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div> 
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>News Subtitle:</strong>
                                <input type="text" name="subtitle" class="form-control" placeholder="News Subtitle">
                                @error('subtitle')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>News Content:</strong>
                                <textarea name="content" class="form-control" id="myeditorinstance" rows="10" style="white-space: pre-wrap; text-indent: 50px;"></textarea>
                                @error('content')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Publication Year:</strong>

                                <select name="publicationYear" class="form-control ">
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

                                <select name="publicationMonth" class="form-control ">
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
                                <strong>Youtube Link:</strong>
                                <input type="text" name="link" class="form-control" placeholder="Youtube Link">
                                @error('link')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <p>The image Dimensions should be as follows:  
                                    <ul>
                                        <li> Horizontal: 4500 px
                                        <li> Vertical: 2250 px 
                                        <li> Size: 10 Mo Maximum
                                    </ul>
                                </p>
                                <strong>News Picture:</strong>
                                <input type="file" name="picture" class="form-control" placeholder="News Picture">
                                @error('picture')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <label class="col-md-5 col-xs-12 control-label"></label>
                    <button type="submit" class="btn btn-success ml-3">Submit</button>
                    <a class="btn btn-danger" href="{{ route('news.index') }}"> Cancel</a>
                </div>
            </div>
        </form>
    </div>

@endsection