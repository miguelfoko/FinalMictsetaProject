@extends('layouts.app')

@section('content')
    <!--<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateResources"> Back</a>
        </div>
    </div> -->

<!-- new content-->
    <!-- PAGE TITLE -->
    <div class="page-title">                    
    <h2><span class="glyphicon glyphicon-ok"></span> Success Stories</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Success Stories</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreateSuccessStories"><i class="fa fa-plus"></i>Create Success Story</a>
                            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
                            <ul class="dropdown-menu">
                                <li><a href="#" onClick ="$('#tableElements').tableExport({type:'sql'});"><img src='adminResources/img/icons/sql.png' width="24"/> SQL</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#tableElements').tableExport({type:'csv',escape:'false'});"><img src='adminResources/img/icons/csv.png' width="24"/> CSV</a></li>
                                <li><a href="#" onClick ="$('#tableElements').tableExport({type:'txt',escape:'false'});"><img src='adminResources/img/icons/txt.png' width="24"/> TXT</a></li>
                                <li class="divider"></li>
                                <li><a href="#" onClick ="$('#tableElements').tableExport({type:'excel',escape:'false'});"><img src='adminResources/img/icons/xls.png' width="24"/> XLS</a></li>
                            </ul>
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
                                    @foreach ($successstories as $sstorry)
                                        <tr heigh=100px>
                                            <td>{{ $sstorry->id }}</td>
                                            <td>{{ $sstorry->title }}</td>
                                            <td>
                                            <a href="{{url('images')}}/{{$sstorry->coverPage}}" target="_blank">View cover page</a>
                                            <!--<img src="{{url('images')}}/{{$sstorry->coverPage}}"  width="50%" height="100%">-->
                                            </td>
                                            <td>
                                                <a href="{{url('files')}}/{{$sstorry->file}}" target="_blank">View File</a>
                                                <!--<embed src="{{url('files')}}/{{$sstorry->file}}" height="100%" width="100%"></td>-->
                                            <td>
                                                <form action="{{ route('successstories.destroy',$sstorry->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('successstories.edit',$sstorry->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $successstories->links() }}                                 
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