@extends('layouts.master')

@section('content')


  <main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
    <br><br><br><br>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
      <div class="member2" >
      Public TVET Colleges
      </div>

      @foreach ($abouttvet as $attvet) 
          <h3> </h3>
          {!! $attvet->publicTvetColleges !!}

          <br><br>
          
          <h3>TVET College Administration </h3>
          {!! $attvet->tvetCollegeAdministration !!}
      @endforeach
 
      </div>
    </section><!-- End About Section -->

    

  </main><!-- End #main -->

  @endsection