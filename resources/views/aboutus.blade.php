@extends('layouts.master')

@section('content')

<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>About us</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li>About us</li>
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
            <a href="abouttvet"><img src="{{ asset('/img/CourseType.png') }}" alt="..."></a>
            </span>
              
            <div class="post-tittle">
              <h4><a href="abouttvet">TVET Colleges</a></h4>
            </div>
            <div class="caption">
                  <p>This text should be updated based on TVET Colleges comments...  </p>
            </div>

            <a class="btn small"  href="abouttvet"> View more</a>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
            <a href="viewcommunitycolleges"><img src="{{ asset('/img/communityColleges.png') }}" alt="..."></a>
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewcommunitycolleges">Community Colleges</a></h4>
            </div>
            <div class="caption">
              <p>This text should be updated based on Community Colleges comments...</p>
            </div>
            <a class="btn small" href="viewcommunitycolleges">View more</a>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
            <a href="viewsetas"><img src="{{ asset('/img/setas.png') }}" alt="..."></a>
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewsetas">SETAs</a></h4>
            </div>
            <div class="caption">
              <p>This text should be updated based on SETAs comments... </p>
            </div>
            <a class="btn small" href="viewsetas">View more</a>
          </div>
        </div>
    </div>
  </div>
</div>
  @endsection