 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home Page Update') }}</div>

                <div class="card-body">
                    <div class="card-body"><a href="slides">Manage sliders</a></div>
                    <div class="card-body"><a href="footer">Manage footer</a></div>
                    <div class="card-body"><a href="footerContent">Edit footer content</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body"><a href="home">Previous</a></div>
</div>
@endsection
