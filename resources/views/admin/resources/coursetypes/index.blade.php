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
                    <h2>Program</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('coursetype.create') }}"> Create Program</a>
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
                    <th>Type</th>
                    <th>Domain</th>
                    <th>Description</th>
                    <th>Duration</th>
                    <th>Qualification</th>
                    <th>Admission Requirements</th>
                    <th>Resources</th>

                    <th width="280px">Action</th>
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

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="collegecoursetype"> Back</a>
        </div>
    </div> 
@endsection