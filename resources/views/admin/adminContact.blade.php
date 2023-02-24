@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('What do you want to do?') }}</div>

                <div class="card-body">
                    <div class="card-body"><a href="updateContactDetails">Update Contact Details</a></div>
                    <div class="card-body"><a href="updateregionalLocations">Update Regional Locations</a></div>
                    <div class="card-body"><a href="updateFaqs">Update FAQs</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body"><a href="home">Previous</a></div>
</div>
@endsection
