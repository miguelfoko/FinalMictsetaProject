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
    <h2><span class="glyphicon glyphicon-flash"></span>College Course Types</h2>
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
                            <a class="btn btn-success" href="/viewCreateCollegeCourseType"><i class="fa fa-plus"></i>Create College Course Types</a>
                            <a class="btn btn-success" href="{{ route('programs.index') }}"><i class="fa fa-bars"></i> View Domains</a>
                            <a class="btn btn-success" href="{{ route('coursetype.index') }}"><i class="fa fa-bars"></i> View Programs</a>
                            <a class="btn btn-success" href="{{ route('college.index') }}"><i class="fa fa-bars"></i> View Colleges</a>
                            <a class="btn btn-success" href="{{ route('subjects.index') }}"><i class="fa fa-bars"></i> View Courses</a>
                            
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
                                        <th>Overview</th>
                                        <th>Industry Fields</th>
                                        <th>Type of Courses</th>
                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collegecoursetype as $cctype)
                                        <tr heigh=100px>
                                            <td>{{ $cctype->id }}</td>
                                            <td>{!! $cctype->overview !!}</td>
                                            <td>{!! $cctype->industryFields !!}</td>
                                            <td>{!! $cctype->typeOfCourses !!}</td>
                                            <td>
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