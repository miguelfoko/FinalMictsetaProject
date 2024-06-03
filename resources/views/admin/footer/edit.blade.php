@extends('layouts.app')

@section('content')

    <div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('footer.update',$footer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="panel panel-default">
            <div class="panel-heading">
                    <h3 class="panel-title"><strong>Edit Footer element</strong></h3>
                    <ul class="panel-controls">
                        <li><a href="/footer" class="panel-remove"><span class="fa fa-times"></span></a></li>
                    </ul>
                </div>
                <div class="panel-body">
                    <p>Fill the form below to edit selected footer.</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Purpose:</strong>
                                <textarea name="purpose" class="form-control summernote" value="{!! $footer->purpose !!}">
                                    {!! $footer->purpose !!}
                                </textarea>
                                @error('purpose')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Content:</strong>
                                <textarea name="content" class="form-control summernote" value="{!! $footer->content !!}">
                                    {!! $footer->content !!}
                                </textarea>
                                @error('content')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Additional Help:</strong>
                                <textarea name="additionalHelp" class="form-control summernote" value="{!! $footer->additionalHelp !!}">
                                    {!! $footer->additionalHelp !!}
                                </textarea>
                                @error('additionalHelp')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>List Of Accronyms:</strong>
                                <textarea name="listOfAccronyms" class="form-control summernote" value="{!! $footer->listOfAccronyms !!}">
                                    {!! $footer->listOfAccronyms !!}
                                </textarea>
                                @error('listOfAccronyms')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Copyright:</strong>
                                <textarea name="copyright" class="form-control summernote" value="{!! $footer->copyright !!}">
                                    {!! $footer->copyright !!}
                                </textarea>
                                @error('copyright')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                            
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Disclaimer:</strong>
                                <textarea name="disclaimer" class="form-control summernote" value="{!! $footer->disclaimer !!}">
                                    {!! $footer->disclaimer !!}
                                </textarea>
                                @error('disclaimer')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <div>
                        <label class="col-md-5 col-xs-12 control-label"></label>
                        <button type="submit" class="btn btn-success ml-3">Submit</button>
                        <a class="btn btn-danger" href="{{ route('footer.index') }}"> Cancel</a>
                    </div>
                </div>
            </div>  
        </form>
    </div>


@endsection

