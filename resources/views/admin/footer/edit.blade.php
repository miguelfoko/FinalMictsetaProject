@extends('layouts.app')

@section('content')


<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('footer.index') }}"> Back</a>
        </div>
    </div> 

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Footer Element</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('footer.update',$footer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Purpose:</strong>
                        <textarea name="purpose" class="form-control" value="{!! $footer->purpose !!}"
                         rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
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
                        <textarea name="content" class="form-control"  value="{!! $footer->content !!}"
                        rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
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
                        <textarea name="additionalHelp" class="form-control"  value="{!! $footer->additionalHelp !!}"
                        rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
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
                        <textarea name="listOfAccronyms" class="form-control"  value="{!! $footer->listOfAccronyms !!}"
                        rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
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
                        <textarea name="copyright" class="form-control"  value="{!! $footer->copyright !!}"
                        rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
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
                        <textarea name="disclaimer" class="form-control" value="{!! $footer->disclaimer !!}"
                         rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
                            {!! $footer->disclaimer !!}
                        </textarea>
                        @error('disclaimer')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                
                <divclass="col-xs-12 col-sm-12 col-md-12"></div>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
<br><br>
                <div class="card-body"><a href="/footerContent">Edit footer element content</a></div>
            </div>

            
        </form>
    </div>


@endsection

