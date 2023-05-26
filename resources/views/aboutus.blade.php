@extends('layouts.master')

@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Trainers Section ======= --> 
     <!-- <section id="trainers" class="trainers ">-->
      <div class="container" >
        <div class="member2" >
         About Us
        </div>
        
        <div class="new">
        <div class="row" data-aos="zoom-in" data-aos-delay="100" >
          <div class="col-lg-4" align="center">
              <div class="card">
            
                <div class="card-img">
                  <a href="abouttvet"> <img src="{{ asset('/img/CourseType.png') }}" align="center" alt="..."> </a>
                </div>
                <div class="card-body"> 
                    <h5 class="card-title"><a href="viewcollegecoursetype">TVET Colleges</a></h5>
                    <p class="fst-italic text-center">
                    This text should be updated based on TVET Colleges comments....                
                    </p>
                    <!--
                      <p class="fst-italic text-center">
                        <a href="abouttvet">View More</a>
                      </p>
                    -->
                </div>
              </div>
          </div>

          <div class="col-lg-4" align="center">
              <div class="card">
            
                <div class="card-img">
                  <a href="viewcommunitycolleges"> <img src="{{ asset('/img/communityColleges.png') }}" align="center" alt="..."> </a>
                </div>
                <div class="card-body"> 
                    <h5 class="card-title"><a href="viewcollegecoursetype">Community Colleges</a></h5>
                    <p class="fst-italic text-center">
                    This text should be updated based on Community Colleges comments....                
                    </p>
                    <!--
                      <p class="fst-italic text-center">
                        <a href="viewcommunitycolleges">View More</a>
                      </p>
                    -->
                </div>
              </div>
          </div>

          <div class="col-lg-4" align="center">
              <div class="card">
            
                <div class="card-img">
                  <a href="viewsetas"> <img src="{{ asset('/img/setas.png') }}" align="center" alt="..."> </a>
                </div>
                <div class="card-body"> 
                    <h5 class="card-title"><a href="viewcollegecoursetype">SETAs</a></h5>
                    <p class="fst-italic text-center">
                    This text should be updated based on SETAs comments....                
                    </p>
                    <!--
                      <p class="fst-italic text-center">
                        <a href="viewsetas">View More</a>
                      </p>
                    -->
                </div>
              </div>
          </div>
</div>
        </div>
      </div>
   <!-- </section>--><!-- End Trainers Section -->

  </main><!-- End #main -->
  @endsection