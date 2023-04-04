@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateResources"> Back</a>
        </div>
    </div> 

<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Success Stories</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('collegecalendar.create') }}"> Create College Calendar</a>
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
                    <th>Event Title</th>
                    <th>Start date</th>
                    <th>End Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($collegecalendar as $ccalendar)
                    <tr heigh=100px>
                        <td >{{ $ccalendar->id }}</td>
                        <td >{{ $ccalendar->eventtitle }}</td>
                        <td >{{ $ccalendar->startdate }}</td>
                        <td >{{ $ccalendar->enddate }}</td>

                        <td width="10%">
                            <form action="{{ route('collegecalendar.destroy',$ccalendar->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('collegecalendar.edit',$ccalendar->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{ $collegecalendar->links() }}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateResources"> Back</a>
        </div>
    </div> 
@endsection