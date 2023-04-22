@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateAboutTvet"> Back</a>
        </div>
    </div> 

<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Community Education and Training</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('communitycolleges.create') }}"> Create Community College</a>
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
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($communitycolleges as $communitycollege)
                    <tr heigh=100px>
                        <td >{{ $communitycollege->id }}</td>
                        <td >{!! $communitycollege->content !!}</td>
                        <td >
                            <form action="{{ route('communitycolleges.destroy',$communitycollege->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('communitycolleges.edit',$communitycollege->id) }}">Edit</a>
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach 
            </tbody>
        </table>
        {{ $communitycolleges->links() }}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateAboutTvet"> Back</a>
        </div>
    </div> 
@endsection