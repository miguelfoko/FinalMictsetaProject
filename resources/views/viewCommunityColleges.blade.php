@extends('layouts.master')

@section('content')


  <main id="main">
  
<br><br><br>
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
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
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

 @endsection