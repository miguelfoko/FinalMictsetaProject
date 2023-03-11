@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('What do you want to do?') }}</div>

                <div class="card-body">
                    <div class="card-body"><a href="updateHomePage">Manage Home Page content</a></div>
                    <div class="card-body"><a href="updateContactUs">Update contact information</a></div>
                    <div class="card-body"><a href="news">Access News</a></div>
                    <div class="card-body"><a href="updateExamination">Update Examination information</a></div>
                    <div class="card-body"><a href="updateAboutTvet">Update About Tvet information</a></div>
                    <div class="card-body"><a href="updateResources">Update Resources</a></div>
                    <div class="card-body"><a href="admintvetcollegetimes">Manage TVET College Time</a></div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
