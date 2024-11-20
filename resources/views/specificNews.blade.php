@extends('layouts.master')

@section('content')

<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>{{$news->title }}</h1>
  </div>
</div>

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
          <div class="col-12 col-md-7 col-lg-12"> 
            <!-- Courses Details Thumb Area Start -->
            <div class="courses_details_thumb1"> <img src="{{ asset('/images/'.$news->picture) }}" alt=""> 
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
            <div class="courses_overview">
              Youtube link:  <a href="{!! $news->link !!}" target=”_blank”>{!! $news->title !!}</a>
            </div>
             
          </div>
        </div>
  </div>
</div>
<!-- Inner Page Wrapper End --> 


  @endsection