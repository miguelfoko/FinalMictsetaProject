@extends('layouts.master')

@section('content')


  <main id="main">
    <br><br><br><br>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="member2" >
      Public TVET Colleges
      </div>

      @foreach ($abouttvet as $attvet) 
          <h3> </h3>
          {!! $attvet->publicTvetColleges !!}

          <br><br>
          
          <h3>TVET College Administration </h3>
          {!! $attvet->tvetCollegeAdministration !!}
      @endforeach
 
      </div>
    </section><!-- End About Section -->

    

  </main><!-- End #main -->

  @endsection