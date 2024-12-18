@extends('layouts.app')

@section('content')
   <!-- <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateResources"> Back</a>
        </div>
    </div> -->

<!-- new content-->
    <!-- PAGE TITLE -->
    <div class="page-title">                    
    <h2><span class="fa fa-caret-square-o-up"></span>Career Guidance</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Career Guidance</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreateCarreerGuidance"><i class="fa fa-plus"></i>Create Career Guidance Booklet</a>
                            
                        </div>                                    
                        
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <table id="tableElements" class="table datatable">
                                <thead>
                                    <tr>
                                        <th width="1%">S.No</th>
                                        <th>Title</th>
                                        <th>Cover Page</th>
                                        <th>File Link</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($careerguidance as $cguidance)
                                        <tr heigh=100px>
                                            <td>{{ $cguidance->id }}</td>
                                            <td>{{ $cguidance->title }}</td>
                                            <td>
                                            <a href="{{url('images')}}/{{$cguidance->coverPage}}" target="_blank">View cover page</a>
                                            <!--<img src="{{url('images')}}/{{$cguidance->coverPage}}"  width="50%" height="10px">-->
                                            </td>
                                            <td>
                                                <a href="{{url('files')}}/{{$cguidance->file}}" target="_blank">View File</a>
                                                <!--<embed src="{{url('files')}}/{{$cguidance->file}}" height="100%" width="100%"></td>-->
                                            
                                            <td>
                                                <form action="{{ route('careerguidance.destroy',$cguidance->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('careerguidance.edit',$cguidance->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $careerguidance->links() }}                                 
                        </div>
                    </div>
                </div>
                <!-- END DATATABLE EXPORT -->                            
            </div>
        </div>

    </div>         
    <!-- END PAGE CONTENT WRAPPER -->
   
    <!--<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateHomePage"> Back</a>
        </div>
    </div> -->

@endsection