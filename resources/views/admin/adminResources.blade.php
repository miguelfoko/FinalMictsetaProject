@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Resources') }}</div>

                <div class="card-body">
                    <div class="card-body"><a href="collegecoursetype">Manage College Course Type</a></div>
                    <div class="card-body"><a href="updateCalendar">Manage Calendar</a></div>
                    <div class="card-body"><a href="updateCarreerGuidance">Manage Carreer Guidance</a></div>
                    <div class="card-body"><a href="successstories">Manage Success Stories</a></div>

                </div>
            </div>
        </div>
    </div>
    <div class="card-body"><a href="home">Previous</a></div>
</div>
@endsection
