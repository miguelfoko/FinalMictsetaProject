@extends('layouts.master')

@section('content')
<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapperSETAs">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>SETAs</h1>
  </div> 
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/aboutus">About us</a></li>
      <li>SETAs</li>
    </ul>
  </div>
</div>
<div class="inner-page-wrapper course-wrapper course-details">
      <div class="container">
      @foreach ($setas as $seta)
          <div class="row">
                     
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p>{!! $seta->content !!} </p>
            </div>
          </div>
          @endforeach 
    </div>
  </div>

 @endsection