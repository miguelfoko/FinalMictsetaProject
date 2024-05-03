@extends('layouts.master')

@section('content')
<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>Privacy Policy</h1>
  </div> 
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li>Privacy policy</li>
    </ul>
  </div>
</div>
<div class="inner-page-wrapper course-wrapper course-details">
      <div class="container">
        @foreach ($footerElements as $footerElement)
          <div class="row">
            <div class="courses_overview">
              <h5>Disclaimer</h5>
            </div>
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p>{!! $footerElement->disclaimer !!} </p>
            </div>

        @endforeach 
        
      </div>
    </div>

 @endsection