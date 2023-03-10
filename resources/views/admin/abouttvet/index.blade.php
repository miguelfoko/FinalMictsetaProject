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
                    <h2>About Tvet</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('adminAbouttvet.create') }}"> Create About TVET</a>
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
                    <th>What is TVET?</th>
                    <th>TVET Overview</th>
                    <th>Public TVET Colleges</th>
                    <th>TVET College Administration</th>
                    <th>Private TvetColleges</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($abouttvet as $atvet)
                    <tr heigh=100px>
                        <td width=5%>{{ $atvet->id }}</td>
                        <td with=17%>{!! $atvet->whatIsTvet !!}</td>
                        <td with=17%>{!! $atvet->tvetOverview !!}</td>
                        <td with=17%>{!! $atvet->publicTvetColleges !!}</td>
                        <td with=17%>{!! $atvet->tvetCollegeAdministration !!}</td>
                        <td with=17%>{!! $atvet->privateTvetColleges !!}</td>
                        <td width="10%">
                            <form action="{{ route('adminAbouttvet.destroy',$atvet->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('adminAbouttvet.edit',$atvet->id) }}">Edit</a>
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach 
            </tbody>
        </table>
        {{ $abouttvet->links() }}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="home"> Back</a>
        </div>
    </div> 
@endsection