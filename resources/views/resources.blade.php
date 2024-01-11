@extends('layouts.master')

@section('content')
<?php
    $text1=" Public TVET Colleges offer a very wide range of courses/programmes that have been developed to respond 
    to the scarce skills needed by employers.";
    if (strlen($text1)>100){
      $text1=substr($text1, 0, 25)."...";
    }
    $text2="Visit our calendar to see key dates for TVET College events.";
    if (strlen($text2)>100){
      $text2=substr($text2, 0, 25)."...";
    }

    $text3="Career Development Services (CDS) is a national initiative to bring free quality career information, advice 
    and counseling services.";
    if (strlen($text3)>100){
      $text3=substr($text3, 0, 50)."...";
    }

    $text4="Visit our calendar to see key dates for TVET College events. ";
    if (strlen($text4)>100){
      $text4=substr($text4, 0, 50)."...";
    }
   

 ?>

<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>Resources</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li>Resources</li>
    </ul>
  </div>
</div>

<!-- Our Team Wrapper start -->
<div class="our-team-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-3">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
            <a href="viewcollegecoursetype"><img src="{{ asset('/img/CourseType.png') }}" alt="..."></a>
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewcollegecoursetype">College Course Types</a></h4>
            </div>
            <div class="caption">
                  <p>{!! $text1 !!}</p>
            </div>

            <a class="btn small"  href="viewcollegecoursetype"> View more</a>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-3">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
            <a href="viewcollegecalendar"><img src="{{ asset('/img/tvetCallendar.png') }}" alt="..."></a>
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewcollegecalendar">TVET College Calendar</a></h4>
            </div>
            <div class="caption">
              <p>{!! $text2 !!}</p>
            </div>
            <a class="btn small" href="viewcollegecalendar">View Calendar</a>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-3">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
            <a href="viewcareerguidance"><img src="{{ asset('/img/Careers_Icon.png') }}" alt="..."></a>
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewcareerguidance">Career<br> Guidance</a></h4>
            </div>
            <div class="caption">
              <p>{!! $text3 !!}</p>
            </div>
            <a class="btn small" href="viewcareerguidance">Get Guidance</a>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-3">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
            <a href="viewsuccessstories"><img src="{{ asset('/img/SuccessStories.png') }}" alt="..."></a>
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewsuccessstories">Success <br>Stories</a></h4>
            </div>
            <div class="caption">
              <p>{!! $text4 !!}</p>
            </div>
            <a class="btn small" href="viewsuccessstories">Get Stories</a>
          </div>
        </div>
    </div>

  </div>
</div>
  

  @endsection