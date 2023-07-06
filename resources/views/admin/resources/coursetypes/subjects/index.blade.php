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
                    <h2>Subjects</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('subjects.create') }}"> Create Subject</a>
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
                    <th>Course</th>
                    <th>Level</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr heigh=100px>
                        <td >{{ $subject->id }}</td>
                        <td >{{ $subject->title }}</td>
                        <td > 
                            @foreach ($coursetypes as $coursetype)
                                @if ($coursetype->id = $subject->coursetype_id)
                                    {!!$coursetype->type!!}
                                @endif
                            @endforeach
                        </td>
                        <td > 
                            @foreach ($subject->level as $level)    
                                {{$level}},
                            @endforeach
                        </td>
                        <td >
                            <form action="{{ route('subjects.destroy',$subject->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('subjects.edit',$subject->id) }}">Edit</a>
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