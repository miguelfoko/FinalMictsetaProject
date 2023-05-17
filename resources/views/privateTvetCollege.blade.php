@extends('layouts.master')

@section('content')


  <main id="main" data-aos="fade-up">

      <div class="container" >
      <div class="member2" >
      Private Colleges
      </div>
  @foreach ($abouttvet as $attvet)
    {!! $attvet->privateTvetColleges !!}
    @endforeach
 

      </div>
   

   
    
    

   

  </main><!-- End #main -->

  @endsection