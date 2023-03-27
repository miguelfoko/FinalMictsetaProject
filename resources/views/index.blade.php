@extends('layouts.master')

@section('content')


  <!-- ======= Hero Section ======= -->
  

   
  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pricing</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner ">
                            @foreach($sliders as $slider)
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <div class="slider-image text-center">
                                        <img src="{{  asset('images/'.$slider->photo) }}" class="d-inline-block border text-center rounded" alt="{{ $slider->image }}">
                                    </div>
                                </div>
                            @endforeach
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
      </div>

      <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">
 
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div>
                <div class="card-img">
                  <a href="viewcollegecalendar"> <img src="{{ asset('/img/tvetCallendar.png') }}" class="img-fluid" alt="..."> </a>
                </div>
                <div class="member-content"> 
                  <a href="viewcollegecalendar">Academic Calendar</a>
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div>
                <div class="card-img">
                  <a href="viewsubscribe"> <img src="{{ asset('/img/Subscribe.png') }}" class="img-fluid" alt="..."> </a>
                </div>
                <div class="member-content"> 
                  <a href="viewsubscribe">Subscribe</a>
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div>
                <div class="card-img">
                  <a href="viewfinancialaid"> <img src="{{ asset('/img/NSFAS_Icon.png') }}" class="img-fluid" alt="..."> </a>
                </div>
                <div class="member-content"> 
                  <a href="viewfinancialaid">Financial Aid</a>
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div>
                <div class="card-img">
                  <a href="viewcareerguidance"> <img src="{{ asset('/img/Careers_Icon.png') }}" class="img-fluid" alt="..."> </a>
                </div>
                <div class="member-content"> 
                  <a href="viewcareerguidance">Career Guidance</a>
                </div>
            </div>
          </div>


        </div>
      </div>
    </section><!-- End Trainers Section -->

  </main><!-- End #main -->
   
  @endsection
