@extends('layouts.app')

@section('content')
<!-- new content-->

<!-- PAGE TITLE -->
<div class="page-title">                    
    <h2><span class="fa fa-book"></span>Program</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
           
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Program</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreateProgram"><i class="fa fa-plus"></i>Create Program</a>
                            
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
                                        <th>Type</th>
                                        <th>Domain</th>
                                        <th>Description</th>
                                        <th>Duration</th>
                                        <th>Qualification</th>
                                        <th>Admission Requirements</th>
                                        <th>Resources</th>

                                        <th width="200px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($coursetype as $ctype)
                                    <tr heigh=100px>
                                        <td >{{ $ctype->id }}</td>
                                        <td >{{ $ctype->type }}</td>
                                        <td > {{ $ctype->idprogram }}</td>
                                        <td >{!! $ctype->description !!}</td>
                                        <td >{!! $ctype->duration !!}</td>
                                        <td >{!! $ctype->qualification !!}</td>
                                        <td >{!! $ctype->admissionRequirements !!}</td>
                                        <td >{!! $ctype->resources !!}</td>
                                        <td >
                                            <form action="{{ route('coursetype.destroy',$ctype->id) }}" method="Post">
                                                <a class="btn btn-primary" href="{{ route('coursetype.edit',$ctype->id) }}">Edit</a>
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