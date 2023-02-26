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
                    <h2>News</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('news.create') }}"> Create News</a>
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
                    <th>News title</th>
                    <th>News Subtitle</th>
                    <th>News content</th>
                    <th>News picture</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($news as $new)
                    <tr heigh=100px>
                        <td width=5%>{{ $new->id }}</td>
                        <td with=15%>{{ $new->title }}</td>
                        <td with=10%>{{ $new->subtitle }}</td>
                        <td width=40%>{{ $new->content }}</td>
                        <td width="20%"><img src="{{ asset('/images/'.$new->picture) }}" alt="" class="img-fluid"> </td>
                        <td width="10%">
                            <form action="{{ route('news.destroy',$new->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('news.edit',$new->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $news->links() !!}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="home"> Back</a>
        </div>
    </div> 
@endsection