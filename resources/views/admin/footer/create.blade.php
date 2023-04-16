@extends('layouts.app')

@section('content')
<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('footer.index') }}"> Back</a>
        </div>
    </div> 
<!-- new content-->
<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left mb-2">
                    <h2>Add Footer element</h2>
                </div>
            </div>
        </div>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('footer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Purpose:</strong>
                        <textarea name="purpose" class="form-control"  rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
                            Purpose
                        </textarea>
                        @error('purpose')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Content:</strong>
                        <textarea name="content" class="form-control"  rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
                            Content
                        </textarea>
                        @error('content')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Additional Help:</strong>
                        <textarea name="additionalHelp" class="form-control"  rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
                            Additional Help
                        </textarea>
                        @error('additionalHelp')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>List Of Accronyms:</strong>
                        <textarea name="listOfAccronyms" class="form-control"  rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
                            List Of Accronyms
                        </textarea>
                        @error('listOfAccronyms')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Copyright:</strong>
                        <textarea name="copyright" class="form-control"  rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
                            Copyright
                        </textarea>
                        @error('copyright')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Disclaimer:</strong>
                        <textarea name="disclaimer" class="form-control"  rows="10" id="myeditorinstance" 
                            rows="5" style="white-space: pre-wrap; text-indent: 50px;"> 
                            Disclaimer
                        </textarea>
                        @error('disclaimer')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div>
                 <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('footer.index') }}"> Back</a>
        </div>
    </div> 


@endsection