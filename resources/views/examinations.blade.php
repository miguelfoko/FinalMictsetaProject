@extends('layouts.master')

@section('content') 

<?php
    $text1="Provides access to a range of information and resources such as:
      Examination Entry forms, Examination Timetables, Examination Re-marking or Re-Checking Requests, 
      Management Action Plans, Validation Programmes";
    if (strlen($text1)>100){
      $text1=substr($text1, 0, 50)."...";
    }
    $text2="This section provides comprehensive training material for all those involved 
    in preparing, invigilating and managing of examinations at their college. </p> <p class=\"fst-italic text-center\">
    Videos may be watched directly on the website or downloaded for offline use as needed.";
    if (strlen($text2)>100){
      $text2=substr($text2, 0, 50)."...";
    }

    $text3="This section provides comprehensive training material for all those involved 
    in setting, moderating and managing of Internal Continuous Assesments (ICASS) at their college.
  </p> <p class=\"fst-italic text-center\">
    Videos may be watched directly on the website or downloaded for offline use as needed.";
    if (strlen($text3)>100){
      $text3=substr($text3, 0, 50)."...";
    }
   

 ?>

<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>Examinations</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li>Examinations</li>
    </ul>
  </div>
</div>


<!-- Our Team Wrapper start -->
<div class="our-team-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
              <img src="{{ asset('/img/ExamResources.png') }}" alt="...">
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewexamresources">Examination Information and Resources</a></h4>
            </div>
            <div class="caption">
                  <p>{!! $text1 !!}</p>
            </div>

            <a class="btn small"  href="viewexamresources"> View Ressources</a>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
              <img src="{{ asset('/img/ExamTrainingVideos.png') }}" alt="...">
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewexamtrainingvideos">Examination Training Videos</a></h4>
            </div>
            <div class="caption">
              <p>{!! $text2 !!}</p>
            </div>
            <a class="btn small" href="viewexamtrainingvideos">View Videos</a>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
              <img src="{{ asset('/img/ICASSTrainingVideos.png') }}" alt="...">
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewicasstrainingvideos">ICASS Training Videos</a></h4>
            </div>
            <div class="caption">
              <p>{!! $text3 !!}</p>
            </div>
            <a class="btn small" href="viewicasstrainingvideos">View Videos</a>
          </div>
        </div>
    </div>
  </div>
</div>
  
  @endsection