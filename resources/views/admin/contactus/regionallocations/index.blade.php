@extends('layouts.app')

@section('content')
    <!--<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateContactUs"> Back</a>
        </div>
    </div> -->

<!-- new content-->
    <!-- PAGE TITLE -->
    <div class="page-title">                    
    <h2><span class="fa fa-globe"></span> Regional Locations</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Regional Locations</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreaRegionalLocation"><i class="fa fa-plus"></i>Create Regional Location</a>
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
                                        <th>Region</th>
                                        <th>Principal</th>
                                        <th>Principal emails</th>
                                        <th>Principal Assistant</th>
                                        <th>Principal Assistant Emails</th>
                                        <th>Address</th>
                                        <th>Website Address</th>
                                        <th>City</th>
                                        <th>Phone(s)</th>
                                        <th>Latitude</th>
                                        <th>Longitude</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($regionallocations as $regionallocation)
                                        <tr heigh=100px>
                                            <td >{{ $regionallocation->id }}</td>
                                            <td >{{ $regionallocation->region }}</td>
                                            <td >{{ $regionallocation->principal }}</td>
                                            <td >{{ $regionallocation->principalEmails }}</td>
                                            <td >{{ $regionallocation->principalAssistant }}</td>
                                            <td >{{ $regionallocation->principalAssistantEmails }}</td>
                                            <td >{{ $regionallocation->address }}</td>
                                            <td >{{ $regionallocation->websiteAddress }}</td>
                                            <td >{{ $regionallocation->city }}</td>
                                            <td >{{ $regionallocation->phone }}</td>
                                            <td >{{ $regionallocation->latitude }}</td>
                                            <td >{{ $regionallocation->longitude }}</td>                        
                                            <td>
                                                <form action="{{ route('regionallocations.destroy',$regionallocation->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('regionallocations.edit',$regionallocation->id) }}"><i class="fa fa-pencil"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $regionallocations->links() }}                                 
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