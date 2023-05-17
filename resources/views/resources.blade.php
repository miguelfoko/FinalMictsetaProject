@extends('layouts.master')

@section('content')

 <!-- ======= Breadcrumbs ======= -->
 
  <main id="main" data-aos="fade-up">

   
      <div class="container-fluid" data-aos="fade-up">
      <div class="member2" >
         Resources
        </div> 
      <div class="container-fluid" data-aos="fade-up">
 
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
            <a href="viewcollegecoursetype"> <img src="{{ asset('/img/CourseType.png') }}" align="center" alt="..."> </a>
            </div>
            <div class="card-body"> 
                <h5 class="card-title"><a href="viewcollegecoursetype">College Course Types</a></h5>
                <p class="fst-italic text-center">
                 Public TVET Colleges offer a very wide range of courses/programmes that have been developed to respond 
                 to the scarce skills needed by employers.                
                </p>
                
                <p class="fst-italic text-center">
                <a href="viewcollegecoursetype">View More</a></p>
            </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
            <a href="viewcollegecalendar"> <img src="{{ asset('/img/tvetCallendar.png') }}"  alt="..."> </a>
            </div>
            <div class="card-body"> 
                <h5 class="card-title"><a href="viewcollegecalendar">TVET College Calendar</a></h5>
                <p class="fst-italic text-center">
                 Visit our calendar to see key dates for TVET College events.                
                </p>
                
                <p class="fst-italic text-center">
                <a href="viewcollegecalendar">View Calendar</a></p>
            </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
            <a href="viewcareerguidance"> <img src="{{ asset('/img/Careers_Icon.png') }}"  alt="..."> </a>
            </div>
            <div class="card-body"> 
                <h5 class="card-title"><a href="viewcareerguidance">Career Guidance</a></h5>
                <p class="fst-italic text-center">
                Career Development Services (CDS) is a national initiative to bring free quality career information, advice 
                and counseling services.                
                </p>
                
                <p class="fst-italic text-center">
                <a href="viewcareerguidance">Get Guidance</a></p>
            </div>
            </div>
          </div>


          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
            <a href="viewsuccessstories"> <img src="{{ asset('/img/SuccessStories.png') }}"  alt="..."> </a>
            </div>
            <div class="card-body"> 
                <h5 class="card-title"><a href="viewsuccessstories">Success Stories</a></h5>
                <p class="fst-italic text-center">
                Nothing yet                
                </p>
                
                <p class="fst-italic text-center">
                <a href="viewsuccessstories">Get Stories</a></p>
            </div>
            </div>
          </div>

        </div>

       

      </div>
    

  </main><!-- End #main -->
  @endsection