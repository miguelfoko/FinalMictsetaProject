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
    <h2><span class="fa fa-video-camera"></span> Exam Videos</h2>
    </div>
    <!-- END PAGE TITLE -->                
    
    <!-- PAGE CONTENT WRAPPER -->
    <div class="page-content-wrap">
           
        <div class="row">
            <div class="col-md-12">
                
                <!-- START DATATABLE EXPORT -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Exam Videos</h3>
                        <div class="btn-group pull-right">
                            <a class="btn btn-success" href="/viewCreateExamVideo"><i class="fa fa-plus"></i>Create Exam Videos</a>
                            
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
                                        <th>Module</th>
                                        <th>Session</th>
                                        <th>Title</th>
                                        <th>Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($examtrainingvideos as $examtrainingvideo)
                                        <tr heigh=100px>
                                            <td>{{ $examtrainingvideo->id }}</td>
                                            <td>Module {{ $examtrainingvideo->module }}</td>
                                            <td>Session {{ $examtrainingvideo->session }}</td>
                                            <td>{!! $examtrainingvideo->title !!}</td>
                                            <td>
                                                <a href="{{url('videos')}}/{{$examtrainingvideo->video}}" target="_blank">View File</a>
                                                <!--<video width="320" height="240" controls>
                                                    <source src="{{url('videos')}}/{{$examtrainingvideo->video}}" type="video/mp4">
                                                    Your browser does not support the video tag
                                                </video> -->   
                                            </td>
                                            <td width="10%">
                                                <form action="{{ route('examtrainingvideos.destroy',$examtrainingvideo->id) }}" method="Post">
                                                    <a class="btn btn-primary" href="{{ route('examtrainingvideos.edit',$examtrainingvideo->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>  
                            {{ $examtrainingvideos->links() }}                                
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