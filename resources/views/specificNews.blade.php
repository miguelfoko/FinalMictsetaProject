@extends('layouts.master')

@section('content')

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/viewNews">Newsletter</a></li>
      <li>{{$news->title }}</li>
    </ul>
  </div>
</div>

<div class="inner-page-wrapper course-wrapper course-details">
  <div class="container">
  <div class="row">
  <div class="col-12 col-md-7 col-lg-8"> 
    <!-- Courses Details Thumb Area Start -->
    <div class="courses_details_thumb"> <img src="{{ asset('/images/'.$news->picture) }}" alt=""> 
      <!-- Courses Details Thumb Caption Area Start --> 
    </div>
    <!-- Courses Details Thumb Area End --> 
    <!-- Courses Overview -->
    <div class="courses_overview">
      <h5>{{$news->subtitle }}</h5>
    </div>
    <!-- Courses Overview Content -->
    <div class="couress_overview_content">
      <p>{!! $news->content !!} </p>
    </div>
    
  </div>

  <!-- Sidebar Area Start --> 
  <div class="col-12 col-md-5 col-lg-4">
    <div class="sidebar_area"> 
      <!-- Single Sidebar Content Start -->
      <div class="single_sidebar_content">
        <div class="row"> 
          <div class="col-12 clearfix">
            <div class="single_option clearfix"> 
              <p>{{$news->title }}</p>
             
            </div>
          </div>
          <div class="col-12 clearfix">
            <div class="single_option clearfix"> 
              <p>{{$news->subtitle }}</p>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
  <!-- Sidebar Area End --> 

</div>
  </div>
</div>
<!-- Inner Page Wrapper End --> 


  @endsection