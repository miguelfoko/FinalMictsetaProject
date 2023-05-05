@extends('layouts.master')

@section('content')


  <main id="main">

    <br><br><br>
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">
      <div class="member2" >
         SETAs
        </div>
        <div class="row">
          @foreach ($setas as $seta) 

            {!! $seta->content !!}

          @endforeach
        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

 @endsection