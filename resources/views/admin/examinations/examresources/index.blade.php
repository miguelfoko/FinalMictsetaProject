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
                    <h2>Examination Information and Resources</h2> 
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('examinformationresources.create') }}"> Create an Examination Resources</a>
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
                    <th>Category</th>
                    <th>File</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($examinformationresources as $examinformationresource)
                    <tr heigh=100px>
                        <td width=5%>{{ $examinformationresource->id }}</td>
                        <td with=10%>{{ $examinformationresource->category }}</td>
                        <td width=20% height="300">
                            <a href="{{url('files')}}/{{$examinformationresource->category}}/{{$examinformationresource->file}}">View File</a>
                            <embed src="{{url('files')}}/{{$examinformationresource->category}}/{{$examinformationresource->file}}" height="100%" width="100%">
                        </td>
                        <td width="10%">
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

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateExamination"> Back</a>
        </div>
    </div> 
@endsection