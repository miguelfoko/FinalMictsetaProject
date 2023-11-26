@extends('layouts.app')

@section('content')
<!-- new content-->
<div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('footer.store') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
            @csrf
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Add Footer element</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/footer" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to add a new slide.</p>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Purpose:</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <textarea name="purpose" class="form-control" rows="5" id="myeditorinstance"></textarea>
                        </div>
                        @error('purpose')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Content:</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <textarea name="content" class="form-control" rows="5" id="myeditorinstance"></textarea>
                        </div>
                        @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Additional Help:</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <textarea name="additionalHelp" class="form-control" rows="5" id="myeditorinstance"></textarea>
                        </div>
                        @error('additionalHelp')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">List Of Accronyms:</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <textarea name="listOfAccronyms" class="form-control" rows="5" id="myeditorinstance"></textarea>
                        </div>
                        @error('listOfAccronyms')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Copyright:</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <textarea name="copyright" class="form-control" rows="5" id="myeditorinstance"></textarea>
                        </div>
                        @error('copyright')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 col-xs-12 control-label">Disclaimer:</label>
                        <div class="col-md-6 col-xs-12">                                            
                            <textarea name="disclaimer" class="form-control" rows="5" id="myeditorinstance"></textarea>
                        </div>
                        @error('disclaimer')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="panel-footer">
                    <div>
                        <label class="col-md-3 col-xs-12 control-label"></label>
                        <button type="submit" class="col-md-3 col-xs-12 btn btn-success">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('footer.index') }}"> Back</a>
        </div>
    </div> 


@endsection