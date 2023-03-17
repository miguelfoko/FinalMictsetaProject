@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="home"> Back</a>
        </div>
    </div> 

<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>College Course Types</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('collegecoursetype.create') }}"> Create College Course Types</a>
                    <a class="btn btn-success" href="{{ route('coursetype.index') }}"> View Course Types</a>
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
                    <th>Overview</th>
                    <th>Industry Fields</th>
                    <th>Type of Courses</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collegecoursetype as $cctype)
                    <tr heigh=100px>
                        <td width=5%>{{ $cctype->id }}</td>
                        <td with=30%>{!! $cctype->overview !!}</td>
                        <td with=30%>{!! $cctype->industryFields !!}</td>
                        <td width=25%>{!! $cctype->typeOfCourses !!}</td>
                        <td width="10%">
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

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="home"> Back</a>
        </div>
    </div> 
@endsection