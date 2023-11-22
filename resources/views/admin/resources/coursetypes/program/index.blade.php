@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="collegecoursetype"> Back</a>
        </div>
    </div> 

<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Existing Programs</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('programs.create') }}"> Create a Program</a>
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
                    <th>Title</th>
                    <th>Description</th>
                    <th >Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($programs as $program)
                    <tr heigh=100px>
                        <td >{{ $program->id }}</td>
                        <td >{{ $program->title }}</td>
                        <td >{!! $program->description !!}</td>
                        <td >
                            <form action="{{ route('programs.destroy',$program->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('programs.edit',$program->id) }}">Edit</a>
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

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="collegecoursetype"> Back</a>
        </div>
    </div> 
@endsection