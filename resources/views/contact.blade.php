@extends('layouts.master')

@section('content')

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
    <div class="row">
      <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
              <img src="{{ asset('/img/ContactUsDetails.png') }}" alt="...">
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewgetintouch">Contact Details</a></h4>
            </div>
            <ul class="blogDate">
              <li> <span>We would love to hear from you if you would like to get more information,
                          please feel free to <a href="#">contact us</a>.</span> </li>
              <li> <span>0800 87 2222 | callcentre@dhet.gov.za</span> </li>
              <li>  <span>or simply click the link below  to complete our contact form</span> </li>
            </ul>

            <a class="btn small"  href="viewgetintouch"> Get In Touch</a>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
              <img src="{{ asset('/img/OurRegionalLocations.png') }}" alt="...">
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewregionallocations">Our Regional Locations</a></h4>
            </div>
            <p>The technical and Vocational Education and training (TVET) branch of
               DHET is responsible for all things TVET does so through its 6 regional office locations</p>
            <a class="btn small" href="viewregionallocations">View Location Details</a>
          </div>
        </div>
    </div>

    <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <div class="single-service">
            
            <span class="icofont ">
              <img src="{{ asset('/img/FAQs.png') }}" alt="...">
            </span>
              
            <div class="post-tittle">
              <h4><a href="viewfaqs">Frequently Asked Questions</a></h4>
            </div>
            <p>If you still need to know more, then, visit our frequently asked questions or 
                 <a href="#">contact us</a> with your enquiry. </p>
            <a class="btn small" href="viewfaqs">View FAQs</a>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- Our Team Wrapper start --> 



  @endsection