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
    <h2><span class="fa fa-arrow-circle-o-left"></span>College Course Types</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">College Course Types</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="{{ route('collegecoursetype.create') }}"><i class="fa fa-plus"></i>Create College Course Types</a>
                            <a class="btn btn-success" href="{{ route('programs.index') }}"><i class="fa fa-bars"></i> View Domains</a>
                            <a class="btn btn-success" href="{{ route('coursetype.index') }}"><i class="fa fa-bars"></i> View Programs</a>
                            <a class="btn btn-success" href="{{ route('college.index') }}"><i class="fa fa-bars"></i> View Colleges</a>
                            <a class="btn btn-success" href="{{ route('subjects.index') }}"><i class="fa fa-bars"></i> View Courses</a>
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
                                        <th>S.No</th>
                                        <th>Overview</th>
                                        <th>Industry Fields</th>
                                        <th>Type of Courses</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collegecoursetype as $cctype)
                                        <tr heigh=100px>
                                            <td width=5%>{{ $cctype->id }}</td>
                                            <td with=30%>{!! $cctype->overview !!}</td>
                                            <td with=30%>{!! $cctype->industryFields !!}</td>
                                            <td width=25%>{!! $cctype->typeOfCourses !!}</td>
                                            <td width="10%">
                                                <form action="{{ route('collegecoursetype.destroy',$cctype->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('collegecoursetype.edit',$cctype->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $collegecoursetype->links() }}                                
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