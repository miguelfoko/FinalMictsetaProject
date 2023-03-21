@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('About TVET ') }}</div>

                <div class="card-body">
                    <div class="card-body"><a href="adminAbouttvet">Add about TVET</a></div>
                    <div class="card-body"><a href="updateCommunityColleges">Update Community Colleges</a></div>
                    <div class="card-body"><a href="updateSetas">Update SETAs</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body"><a href="home">Previous</a></div>
</div>
@endsection
