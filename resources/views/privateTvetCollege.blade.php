@extends('layouts.master')

@section('content')


  <main id="main" data-aos="fade-up">

      <div class="container-fluid" >
      <div class="member2" >
      Private Colleges
      </div>
      <div class="noUseOfWysiwyg">
        @foreach ($abouttvet as $attvet)
        {!! $attvet->privateTvetColleges !!}
        @endforeach
      </div>

      </div>
   

   
    
    

   

  </main><!-- End #main -->

  @endsection