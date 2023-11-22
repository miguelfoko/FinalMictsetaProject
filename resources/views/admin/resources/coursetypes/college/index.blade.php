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
                    <h2>Colleges</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('college.create') }}"> Create College</a>
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
                    <th>Regional Location</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($college as $colle)
                    <tr heigh=100px>
                        <td >{{ $colle->id }}</td>
                        <td >{{ $colle->title }}</td>
                        <td > 
                            @foreach ($regionallocations as $regionallocation)
                                @if ($regionallocation->id == $colle->regional_location_id)
                                    {{$regionallocation->region}};<br>
                                @endif
                            @endforeach
                        </td>

                        <td >
                            <form action="{{ route('college.destroy',$colle->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('college.edit',$colle->id) }}">Edit</a>
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