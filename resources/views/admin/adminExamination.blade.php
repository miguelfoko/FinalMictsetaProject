@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('What do you want to do?') }}</div>

                <div class="card-body">
                    <div class="card-body"><a href="updateExamResources">Update Examination Resources</a></div>
                    <div class="card-body"><a href="updateTrainingVideos">Update Training Videos</a></div>
                    <div class="card-body"><a href="updateIcassTrainingVideos">Update ICASS Training Videos</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body"><a href="home">Previous</a></div>
</div>
@endsection
