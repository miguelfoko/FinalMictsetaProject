@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateExamination"> Back</a>
        </div>
    </div> 

<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Exam Videos</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('examtrainingvideos.create') }}"> Create Exam Videos</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Module</th>
                    <th>Session</th>
                    <th>Title</th>
                    <th>Video</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($examtrainingvideos as $examtrainingvideo)
                    <tr heigh=100px>
                        <td width=5%>{{ $examtrainingvideo->id }}</td>
                        <td with=10%>Module {{ $examtrainingvideo->module }}</td>
                        <td with=10%>Session {{ $examtrainingvideo->session }}</td>
                        <td width=35%>{!! $examtrainingvideo->title !!}</td>
                        <td width=35%>
                            <video width="320" height="240" controls>
                                <source src="{{url('videos')}}/{{$examtrainingvideo->video}}" type="video/mp4">
                                Your browser does not support the video tag
                            </video>    
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

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateExamination"> Back</a>
        </div>
    </div> 
@endsection