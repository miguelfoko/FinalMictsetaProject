@extends('layouts.master')

@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Trainers</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= --> 
    <section id="trainers" class="trainers ">
    <br><br>
      <div class="container" data-aos="fade-up">
      <div class="member2" >
         About Us
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div >
            <a href="abouttvet">
               <img src="{{ asset('/img/CourseType.png') }}" class="img-fluid" width= "200px" width= "200px" alt="">
            </a>
              <div class="member-content">
              <h4><a href="abouttvet">TVET Colleges</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div >
            <a href="viewcommunitycolleges"> 
              <img src="{{ asset('/img/communityColleges.png') }}" class="img-fluid" width= "200px" width= "200px" alt="">
            </a>
              <div class="member-content">
              <h4> <a href="viewcommunitycolleges"> Community Colleges</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div >
            <a href="viewsetas"> 
              <img src="{{ asset('/img/setas.png') }}" class="img-fluid" width= "200px" width= "200px" alt="">
            </a>
              <div class="member-content">
              <h4><a href="viewsetas">SETAs</a></h4>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
  @endsection