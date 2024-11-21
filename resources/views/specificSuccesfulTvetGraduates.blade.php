@extends('layouts.master')

@section('content')

<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>{{$succesfulTvetGraduates->title }}</h1>
  </div>
</div> 

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li>{{$succesfulTvetGraduates->name }}</li>
    </ul>
  </div>
</div>

<div class="inner-page-wrapper course-wrapper course-details">
  <div class="container">
      <div class="row">
          <div class="col-12 col-md-7 col-lg-12"> 
            <!-- Courses Details Thumb Area Start -->
            <div class="courses_details_thumb1"> <img src="{{ asset('/images/'.$succesfulTvetGraduates->picture) }}" alt=""> 
              <!-- Courses Details Thumb Caption Area Start --> 
            </div>
            <!-- Courses Details Thumb Area End --> 
            <!-- Courses Overview -->
            <div class="courses_overview">
              <h5>{{$succesfulTvetGraduates->title }}</h5>
            </div>
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p>{!! $succesfulTvetGraduates->content !!} </p>
            </div>
             
          </div>
        </div>
  </div>
</div>
<!-- Inner Page Wrapper End --> 


  @endsection