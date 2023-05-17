@extends('layouts.master')

@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Trainers Section ======= --> 
     <!-- <section id="trainers" class="trainers ">-->
      <div class="container" >
      <div class="member2" >
         About Us
        </div>
        <div class="row"  data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-3 col-md-3 d-flex align-items-stretch">
            <div >
            <a href="abouttvet">
               <img src="{{ asset('/img/CourseType.png') }}" class="img-fluid" width= "200px" width= "200px" alt="">
            </a>
              <div class="member-content">
                <a href="abouttvet">TVET Colleges</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div >
            <a href="viewcommunitycolleges"> 
              <img src="{{ asset('/img/communityColleges.png') }}" class="img-fluid" width= "200px" width= "200px" alt="">
            </a>
              <div class="member-content">
               <a href="viewcommunitycolleges"> Community Colleges</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div >
            <a href="viewsetas"> 
              <img src="{{ asset('/img/setas.png') }}" class="img-fluid" width= "200px" width= "200px" alt="">
            </a>
              <div class="member-content">
              <a href="viewsetas">SETAs</a>
            </div>
          </div>

        </div>
      </div>
   <!-- </section>--><!-- End Trainers Section -->

  </main><!-- End #main -->
  @endsection