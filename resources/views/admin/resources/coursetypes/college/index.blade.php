@extends('layouts.app')

@section('content')
<!-- new content-->

<!-- PAGE TITLE -->
<div class="page-title">                    
    <h2><span class="fa fa-book"></span>Colleges</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
           
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Colleges</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="{{ route('college.create') }}"><i class="fa fa-plus"></i>Create College</a>
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
                                        <th>Title</th>
                                        <th>Regional Location</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($college as $colle)
                                    <tr heigh=100px>
                                        <td >{{ $colle->id }}</td>
                                        <td >{{ $colle->title }}</td>
                                        <td > 
                                            @foreach ($regionallocations as $regionallocation)
                                                @if ($regionallocation->id == $colle->regional_location_id)
                                                    {{$regionallocation->region}};<br>
                                                @endif
                                            @endforeach
                                        </td>

                                        <td >
                                            <form action="{{ route('college.destroy',$colle->id) }}" method="Post">
                                                <a class="btn btn-primary" href="{{ route('college.edit',$colle->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>                                  
                        </div>
                    </div>
                </div>
                <!-- END DATATABLE EXPORT -->                            
            </div>
        </div>

    </div>         
    <!-- END PAGE CONTENT WRAPPER -->
   
    <!--<div class="container">
        <div class="pull-right"> viewCreateProgram
            <a class="btn btn-success" href="updateHomePage"> Back</a>
        </div>
    </div> -->



@endsection