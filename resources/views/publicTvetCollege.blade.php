@extends('layouts.master')

@section('content')


  <main id="main">
   
      <div class="container-fluid" data-aos="fade-up">
      <div class="member2" >
      Public TVET Colleges
      </div>
   
      <div class="noUseOfWysiwyg">
        @foreach ($abouttvet as $attvet) 
            <h3> </h3>
            {!! $attvet->publicTvetColleges !!}
            
            <h3>TVET College Administration </h3>
            {!! $attvet->tvetCollegeAdministration !!}
        @endforeach
      </div>
      </div>
   

    

  </main><!-- End #main -->

  @endsection