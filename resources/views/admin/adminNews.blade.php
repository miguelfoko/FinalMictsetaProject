@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('News') }}</div>

                <div class="card-body">
                    <div class="card-body"><a href="news">Consult News</a></div>

                    <div class="card-body"><a href="{{ route('news.create') }}">Create News</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body"><a href="home">Previous</a></div>
</div>
@endsection
