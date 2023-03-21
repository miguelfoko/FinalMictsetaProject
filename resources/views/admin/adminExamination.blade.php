@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Examination') }}</div>

                <div class="card-body">
                    <div class="card-body"><a href="examResources">Update Examination Resources</a></div>
                    <div class="card-body"><a href="examtrainingvideos">Update Training Videos</a></div>
                    <div class="card-body"><a href="icasstrainingvideos">Update ICASS Training Videos</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body"><a href="home">Previous</a></div>
</div>
@endsection
