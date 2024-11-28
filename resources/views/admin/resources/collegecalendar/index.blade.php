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
    <h2><span class="fa fa-calendar"></span>College Calendar</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
           
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">College Calendar</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="viewCreateCalendar"><i class="fa fa-plus"></i>Create College Calendar</a>
                            
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
                                        <th>Event Title</th>
                                        <th>Start date</th>
                                        <th>End Date</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collegecalendar as $ccalendar)
                                        <tr heigh=100px>
                                            <td >{{ $ccalendar->id }}</td>
                                            <td >{{ $ccalendar->eventtitle }}</td>
                                            <td >{{ $ccalendar->startdate }}</td>
                                            <td >{{ $ccalendar->enddate }}</td>

                                            <td>
                                                <form action="{{ route('collegecalendar.destroy',$ccalendar->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('collegecalendar.edit',$ccalendar->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $collegecalendar->links() }}                                
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