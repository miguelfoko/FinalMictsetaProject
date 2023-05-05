@extends('layouts.master')

@section('content')


  <main id="main">

    <br><br><br><br>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="member2" >
      Private Colleges
      </div>
  @foreach ($abouttvet as $attvet)
    {!! $attvet->privateTvetColleges !!}
    @endforeach
 

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= 
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Campuses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Head offices</p>
          </div>

        </div>

      </div>
    
    </section>--> <!-- End Counts Section -->

   

  </main><!-- End #main -->

  @endsection