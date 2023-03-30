@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateContactUs"> Back</a>
        </div>
    </div> 

<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Frequently Asked Questions (FAQs)</h2>
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('faqs.create') }}"> Create FAQ</a>
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
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($faqs as $faq)
                    <tr heigh=100px>
                        <td >{{ $faq->id }}</td>
                        <td >{{ $faq->title }}</td>
                        <td >{!! $faq->content !!}</td>
                        
                        <td >
                            <form action="{{ route('faqs.destroy',$faq->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('faqs.edit',$faq->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {{ $faqs->links() }}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateContactUs"> Back</a>
        </div>
    </div> 
@endsection