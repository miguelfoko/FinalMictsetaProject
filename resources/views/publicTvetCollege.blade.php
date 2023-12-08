@extends('layouts.master')

@section('content')

<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>About TVET</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/aboutus">About us</a></li>
      <li><a href="/abouttvet">About TVET</a></li>
      <li>Public TVET Colleges</li>
    </ul>
  </div>
</div>

<div class="inner-page-wrapper course-wrapper course-details">
      <div class="container">
       @foreach ($abouttvet as $attvet) 
          <div class="row">
            <div class="courses_overview">
              <h5>Overview</h5>
            </div>
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p>{!! $attvet->publicTvetColleges !!} </p>
            </div>

            <div class="courses_overview">
              <h5>TVET College Administration</h5>
            </div>
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p>{!! $attvet->tvetCollegeAdministration !!} </p>
            </div>

          </div>
        @endforeach 
        
      </div>
    </div>

  @endsection