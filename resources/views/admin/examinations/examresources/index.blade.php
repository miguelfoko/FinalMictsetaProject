@extends('layouts.app')

@section('content')
    <!--<div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateExamination"> Back</a>
        </div>
    </div> -->

<!-- new content-->
    <!-- PAGE TITLE -->
    <div class="page-title">                    
    <h2><span class="fa fa-maxcdn"></span> Examination Information and Resources</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
    
        
        
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Examination Information and Resources</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreateExaminationResource"><i class="fa fa-plus"></i>Create an Examination Resources</a>
                            
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
                                        <th>Category</th>
                                        <th>File</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($examinformationresources as $examinformationresource)
                                        <tr>
                                            <td>{{ $examinformationresource->id }}</td>
                                            <td>{{ $examinformationresource->category }}</td>
                                            <td>
                                                <a href="{{url('files')}}/{{$examinformationresource->category}}/{{$examinformationresource->file}}" target="_blank">View File</a>
                                                <!--<embed src="{{url('files')}}/{{$examinformationresource->category}}/{{$examinformationresource->file}}" height="100%" width="100%">-->
                                            </td>
                                            <td>
                                                <form action="{{ route('examinformationresources.destroy',$examinformationresource->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('examinformationresources.edit',$examinformationresource->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $examinformationresources->links() }}                             
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