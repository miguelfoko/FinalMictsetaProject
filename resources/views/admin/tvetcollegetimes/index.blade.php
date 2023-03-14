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
                    <h2>TVET College Times</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('admintvetcollegetimes.create') }}"> Create TVET College Times</a>
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
                    <th>Volume</th>
                    <th>Publication Date</th>
                    <th>Cover Page</th>
                    <th>File Link</th>
                    <th>Size</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tvetcollegetimes as $tctimes)
                    <tr heigh=100px>
                        <td width=5%>{{ $tctimes->id }}</td>
                        <td with=20%>{{ $tctimes->title }}</td>
                        <td with=10%>{{ $tctimes->volume }}</td>
                        <td width=10%>{{$tctimes->publicationDate}}</td>
                        <td width=15%>
                        <img src="{{url('images')}}/{{$tctimes->coverPage}}"  width="50%" height="100%">
                        </td>
                        <td width=20% height="300">
                            <a href="{{url('files')}}/{{$tctimes->file}}">View File</a>
                            <embed src="{{url('files')}}/{{$tctimes->file}}" height="100%" width="100%"></td>
                          
                        <td width=10%>{{$tctimes->size}}</td>
                        <td width="10%">
                            <form action="{{ route('admintvetcollegetimes.destroy',$tctimes->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('admintvetcollegetimes.edit',$tctimes->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{ $tvetcollegetimes->links() }}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="home"> Back</a>
        </div>
    </div> 
@endsection