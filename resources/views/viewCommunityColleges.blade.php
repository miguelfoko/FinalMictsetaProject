@extends('layouts.master')

@section('content')


  <main id="main">

    <!-- ======= Pricing Section ======= -->
   
      <div class="container" data-aos="fade-up">

      <div class="member2" >
      Community Education and Training Colleges
      </div>
      <div class="member2" >
      
      </div>
        <div class="row">
        
        @foreach ($communitycolleges as $communitycollege) 

        {!! $communitycollege->content !!}

        @endforeach
        </div>

      </div>
   

  </main><!-- End #main -->

 @endsection