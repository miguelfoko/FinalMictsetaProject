@extends('layouts.master')

@section('content')


  <main id="main">
   
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
   

    

  </main><!-- End #main -->

  @endsection