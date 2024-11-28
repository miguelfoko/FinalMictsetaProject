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
                            <a class="btn btn-success" href="/viewCreateCollege"><i class="fa fa-plus"></i>Create College</a>
                            
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
                                        <th>Regional Location</th>
                                        <th width="200px">Action</th>
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