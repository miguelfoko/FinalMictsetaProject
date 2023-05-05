@extends('layouts.master')

@section('content')

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">
            The internal Stakeholder internalStakeholderList:<br>
            <ul>
            @foreach ($internalStakeHolders as $internalStakeHolder)
                <li>{{ $internalStakeHolder }}</li>
            @endforeach
    </ul>
          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @endsection