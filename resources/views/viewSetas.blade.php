@extends('layouts.master')

@section('content')


  <main id="main">

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
   

  </main><!-- End #main -->

 @endsection