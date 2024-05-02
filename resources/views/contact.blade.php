@extends('layouts.master')

@section('content')

<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>Contact us</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li>Contact us</li>
    </ul>
  </div>
</div>

<!-- Our Team Wrapper start -->
<div class="our-team-wrapper">
  <div class="container">
    <div class="new">
      <div class="row">
        <div class="col-sm-12 col-lg-4">
          <div class="single-blog">
            <div class="single-service">
              <span class="icofont ">
              <a href="viewgetintouch"><img src="{{ asset('/img/ContactUsDetails.png') }}" alt="..."></a>
              </span>
                
              <div class="post-tittle">
                <h4><a href="viewgetintouch">Contact Details</a></h4>
              </div>
              <div class="caption">
                    <p> <span>We would love to hear from you if you would like to get more information... </p>
              </div>

              <a class="btn small"  href="viewgetintouch"> Get In Touch</a>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-lg-4">
          <div class="single-blog">
            <div class="single-service">
              
              <span class="icofont ">
              <a href="viewregionallocations"><img src="{{ asset('/img/OurRegionalLocations.png') }}" alt="..."></a>
              </span>
                
              <div class="post-tittle">
                <h4><a href="viewregionallocations">Our Regional Locations</a></h4>
              </div>
              <div class="caption">
                <p>The technical and Vocational Education and training (TVET) branch of
                  DHET ...</p>
              </div>
              <a class="btn small" href="viewregionallocations">View Location Details</a>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-lg-4">
          <div class="single-blog">
            <div class="single-service">
              
              <span class="icofont ">
              <a href="viewfaqs"><img src="{{ asset('/img/FAQs.png') }}" alt="..."></a>
              </span>
                
              <div class="post-tittle">
                <h4><a href="viewfaqs">FAQs</a></h4>
              </div>
              <div class="caption">
                <p>If you still need to know more, then, visit our frequently asked questions or...</p> 
              </div>
              <a class="btn small" href="viewfaqs">View FAQs</a>
            </div>
          </div>
        </div>

      </div>
    </div>
</div>
<!-- Our Team Wrapper start --> 



  @endsection