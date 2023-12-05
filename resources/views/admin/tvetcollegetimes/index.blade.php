@extends('layouts.app')

@section('content')
    <!--<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="home"> Back</a>
        </div>
    </div> -->

<!-- new content-->
    <!-- PAGE TITLE -->
    <div class="page-title">                    
    <h2><span class="glyphicon glyphicon-time"></span>TVET College Times</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">TVET College Times</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreateCollegeTimes"><i class="fa fa-plus"></i>Create TVET College Times</a>
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
                                        <th>Volume</th>
                                        <th>Publication Date</th>
                                        <th>Cover Page</th>
                                        <th>File Link</th>
                                        <th>Size</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tvetcollegetimes as $tctimes)
                                        <tr heigh=100px>
                                            <td>{{ $tctimes->id }}</td>
                                            <td>{{ $tctimes->title }}</td>
                                            <td>{{ $tctimes->volume }}</td>
                                            <td>{{$tctimes->publicationDate}}</td>
                                            <td>
                                                <a href="{{url('images')}}/{{$tctimes->coverPage}}" target="_blank">View cover page</a>
                                                <!--<img src="{{url('images')}}/{{$tctimes->coverPage}}"  width="50%" height="100%">-->
                                            </td>
                                            <td width=20% height="300">
                                                <a href="{{url('files')}}/{{$tctimes->file}}" target="_blank">View File</a>
                                                <!--<embed src="{{url('files')}}/{{$tctimes->file}}" height="100%" width="100%"></td>-->
                                            
                                            <td>{{$tctimes->size}}</td>
                                            <td>
                                                <form action="{{ route('admintvetcollegetimes.destroy',$tctimes->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('admintvetcollegetimes.edit',$tctimes->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $tvetcollegetimes->links() }}                               
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