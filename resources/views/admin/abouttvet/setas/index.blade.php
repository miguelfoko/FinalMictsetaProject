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
                    <h2>Setas</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('setas.create') }}"> Create SETAS</a>
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
                @foreach ($setas as $seta)
                    <tr heigh=100px>
                        <td >{{ $seta->id }}</td>
                        <td >{!! $seta->content !!}</td>
                        <td >
                            <form action="{{ route('setas.destroy',$seta->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('setas.edit',$seta->id) }}">Edit</a>
                                @csrf 
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach 
            </tbody>
        </table>
        {{ $setas->links() }}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateAboutTvet"> Back</a>
        </div>
    </div> 
@endsection