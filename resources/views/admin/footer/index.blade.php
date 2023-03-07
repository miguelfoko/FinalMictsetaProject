@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateHomePage"> Back</a>
        </div>
    </div> 

<!-- new content-->

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Footer's Title</h2> 
                </div>
                <div class="pull-right mb-2">
                    <a class="btn btn-success" href="{{ route('footer.create') }}"> Create Footer element</a>
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
                    <th>Footer title</th>
                    <th>Footer content</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($footer as $foot)
                    <tr heigh=100px>
                        <td width=5%>{{ $foot->id }}</td>
                        <td with=25%>{{ $foot->title }}</td>
                        <td with=50%>
                            <div class="pull-right">
                                <ul>
                                @foreach ($footerContent as $fc)
                                    @if($fc->footer_id==$foot->id)
                                        <li> {{ $fc->value }}</li>
                                    @endif  
                                @endforeach

                                </ul>   
                                <a class="btn btn-success" href="{{ route('footerContent.create',$foot->id) }}"> Add content</a>
                            </div>
                        </td>
                        <td width="20%">
                            <form action="{{ route('footer.destroy',$foot->id) }}" method="Post">
                                <a class="btn btn-primary" href="{{ route('footer.edit',$foot->id) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                            footerContent
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        {!! $footer->links() !!}
    </div>

    <div class="container">
        <div class="pull-right">
            <a class="btn btn-success" href="updateHomePage"> Back</a>
        </div>
    </div> 

@endsection