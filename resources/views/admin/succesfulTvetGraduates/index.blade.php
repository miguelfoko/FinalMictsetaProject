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
    <h2><span class="fa fa-info"></span> Successful TVET Graduates</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Successful TVET Graduates</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewsuccesfultvetgraduates"><i class="fa fa-plus"></i> Create Successful TVET Graduates</a>
                            
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
                                        <th>TVET Graduates Name</th>
                                        <th>TVET Graduates Title</th>
                                        <th>TVET Graduates content</th>
                                        <th>TVET Graduates picture</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($succesfulTvetGraduates as $succesfulTvetGraduate)
                                        <tr heigh=100px>
                                            <td width=5%>{{ $succesfulTvetGraduate->id }}</td>
                                            <td>{{ $succesfulTvetGraduate->name }}</td>
                                            <td>{{ $succesfulTvetGraduate->title }}</td>
                                            <td>{!! $succesfulTvetGraduate->content !!}</td>
                                            <td>
                                                <a href="{{ asset('/images/'.$succesfulTvetGraduate->picture) }}" target="_blank">View File</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('succesfulTvetGraduates.destroy',$succesfulTvetGraduate->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('succesfulTvetGraduates.edit',$succesfulTvetGraduate->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $succesfulTvetGraduates->links() }}                                
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