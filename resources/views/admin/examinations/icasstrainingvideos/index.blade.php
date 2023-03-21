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
                    <h2>ICASS Videos</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('icasstrainingvideos.create') }}"> Create ICASS Videos</a>
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
                @foreach ($icasstrainingvideos as $icasstrainingvideo)
                    <tr heigh=100px>
                        <td width=5%>{{ $icasstrainingvideo->id }}</td>
                        <td with=10%>Module {{ $icasstrainingvideo->module }}</td>
                        <td with=10%>Session {{ $icasstrainingvideo->session }}</td>
                        <td width=35%>{!! $icasstrainingvideo->title !!}</td>
                        <td width=35%>
                            <video width="320" height="240" controls>
                                <source src="{{url('videos')}}/{{$icasstrainingvideo->video}}" type="video/mp4">
                                Your browser does not support the video tag
                            </video>    
                        </td>
                        <td width="10%">
                            <form action="{{ route('icasstrainingvideos.destroy',$icasstrainingvideo->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('icasstrainingvideos.edit',$icasstrainingvideo->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{ $icasstrainingvideos->links() }}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateExamination"> Back</a>
        </div>
    </div> 
@endsection