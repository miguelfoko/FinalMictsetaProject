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
                    <h2>Subscribtions</h2>
                </div>
            </div>
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Organisation</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Subject</th>
                    <th >Message</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subscribes as $subscribe)
                    <tr heigh=100px>
                        <td >{{ $subscribe->id }}</td>
                        <td >{{ $subscribe->name }}</td>
                        <td >{{ $subscribe->organisation }}</td>
                        <td >{{ $subscribe->email }}</td>
                        <td >{{ $subscribe->number }}</td>
                        <td >{{ $subscribe->subject }}</td>
                        <td >{{ $subscribe->message }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $news->links() }}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="home"> Back</a>
        </div>
    </div> 
@endsection