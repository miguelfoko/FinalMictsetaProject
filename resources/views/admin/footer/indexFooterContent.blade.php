@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('footer.index') }}"> Back</a>
        </div>
    </div> 

<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Footer's Content</h2> 
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('footerContent.create') }}"> Create Footer content</a>
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
                    <th>#</th>
                    <th>Footer element ID</th>
                    <th>Footer content</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($footerContent as $foot)
                    <tr heigh=100px>
                        <td width=5%>{{ $foot->footer_id }}</td>
                        <td with=65%>{{ $foot->value }}</td>
                        <td width="30%">
                            <form action="{{ route('footerContent.destroy',$foot->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('footerContent.edit',$foot->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $footerContent->links() !!}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('footer.index') }}"> Back</a>
        </div>
    </div> 

@endsection