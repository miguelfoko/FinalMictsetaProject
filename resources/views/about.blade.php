@extends('layouts.master')

@section('content')


  <main id="main"  data-aos="fade-in">
  

    <!-- ======= About Section ======= -->
  <div class="container" >
      <div class="member2" >
         About TVET
        </div>
    @foreach ($abouttvet as $attvet)

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