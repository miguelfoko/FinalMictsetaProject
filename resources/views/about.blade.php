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
      <li>About TVET</li>
    </ul>
  </div>
</div>

    <div class="inner-page-wrapper course-wrapper course-details">
      <div class="container">
        @foreach ($abouttvet as $attvet)
          <div class="row">
            <!-- Courses Details Thumb Area End --> 
            <!-- Courses Overview -->
            <div class="courses_overview">
              <h5>What is TVET?</h5>
            </div>
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p>{!! $attvet->whatIsTvet !!} </p>
            </div>

            <div class="courses_overview">
              <h5>TVET Overview</h5>
            </div>
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p>{!! $attvet->tvetOverview !!} </p>
            </div>

          </div>
          <b><a href="publicTvetCollege" class="btn small"> Public TVET Colleges </a> </b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp         <b><a href="privateTvetCollege" class="btn small">Private Colleges </a>
        @endforeach 
        
      </div>
    </div>

  @endsection