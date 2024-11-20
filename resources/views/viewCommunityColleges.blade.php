@extends('layouts.master')

@section('content')
<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapperCommunityEducationAndTrainingCollege">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>Community Education and Training Colleges</h1>
  </div> 
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/aboutus">About us</a></li>
      <li>Community Education and Training Colleges</li>
    </ul>
  </div>
</div>

<div class="inner-page-wrapper course-wrapper course-details">
      <div class="container">
      @foreach ($communitycolleges as $communitycollege)
          <div class="row">
            <!-- Courses Details Thumb Area End -->  
            <!-- Courses Overview -->
            <div class="courses_overview">
              <h5>Community Education and Training Colleges</h5>
            </div>
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p>{!! $communitycollege->content !!} </p>
            </div>
          </div>
        @endforeach 
      </div>
    </div>

 
 @endsection