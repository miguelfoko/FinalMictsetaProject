@extends('layouts.app')

@section('content')
    <!--<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateAboutTvet"> Back</a>
        </div>
    </div> -->

<!-- new content-->
    <!-- PAGE TITLE -->
    <div class="page-title">                    
    <h2><span class="fa fa-arrow-circle-o-left"></span>About Tvet</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">About Tvet</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="{{ route('adminAbouttvet.create') }}"> Create About TVET</a>
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
                                        <th>What is TVET?</th>
                                        <th>TVET Overview</th>
                                        <th>Public TVET Colleges</th>
                                        <th>TVET College Administration</th>
                                        <th>Private TvetColleges</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($abouttvet as $atvet)
                                        <tr heigh=100px>
                                            <td width=5%>{{ $atvet->id }}</td>
                                            <td with=17%>{!! $atvet->whatIsTvet !!}</td>
                                            <td with=17%>{!! $atvet->tvetOverview !!}</td>
                                            <td with=17%>{!! $atvet->publicTvetColleges !!}</td>
                                            <td with=17%>{!! $atvet->tvetCollegeAdministration !!}</td>
                                            <td with=17%>{!! $atvet->privateTvetColleges !!}</td>
                                            <td width="10%">
                                                <form action="{{ route('adminAbouttvet.destroy',$atvet->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('adminAbouttvet.edit',$atvet->id) }}">Edit</a>
                                                    @csrf 
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach 
                                </tbody>
                            </table>  
                            {{ $abouttvet->links() }}                                  
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