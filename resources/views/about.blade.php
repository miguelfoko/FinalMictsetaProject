@extends('layouts.master')

@section('content')


  <main id="main">
  
    <br><br><br><br>

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    @foreach ($abouttvet as $attvet)
      <div class="container" data-aos="fade-up">
      <div class="member2" >
         About TVET
        </div>

            <h3>1. What is TVET? </h3>
                {!! $attvet->whatIsTvet !!}
            <br>

        <h3>2. TVET Overview </h3>
              {!! $attvet->tvetOverview !!}
              <br><br>
<b><a href="publicTvetCollege"> Public TVET Colleges </a> </b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp         <b><a href="privateTvetCollege">Private Colleges </a></b>
    @endforeach 

      </div>

  </main><!-- End #main -->

  @endsection