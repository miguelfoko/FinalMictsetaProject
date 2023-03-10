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

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
    @foreach ($abouttvet as $attvet)
      <div class="container" data-aos="fade-up">
        <h3> ABOUT TVET  </h3> <br>

            <h3>1. What is TVET? </h3>
                {!! $attvet->whatIsTvet !!}
            <br>

        <h3>2. TVET Overview </h3>
              {!! $attvet->tvetOverview !!}
              <br><br>
<b><a href="publicTvetCollege"> Public TVET Colleges </a> </b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp         <b><a href="privateTvetCollege">Private Colleges </a></b>
    @endforeach 

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Students</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="64" data-purecounter-duration="1" class="purecounter"></span>
            <p>Courses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="42" data-purecounter-duration="1" class="purecounter"></span>
            <p>Campuses</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Head offices</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What are they saying</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Snethemba_Mpontshane.jpg" class="testimonial-img" alt="">
                  <h3>Snethemba Mpontshane </h3>
                  <h4>Former Electrical Engineering student at Majuba TVET College</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I am a qualified Senior Electrician at Eskom based at the Kusile Power Station in Witbank. The practical training and advanced equipment that we were exposed to in workshops and highly skilled lecturers at Majuba TVET College laid a solid foundation for me to achieve success in my profession. 
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Sue_Kelly_Maneveld.JPG" class="testimonial-img" alt="">
                  <h3>Sue-Kelly Maneveld</h3>
                  <h4>Former student of College of Cape Town TVET </h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    I am the proud owner of Be-Dazzle Hair and Beauty salons. All of this would not have been possible without the College of Cape Town being a stepping stone and allowing me to fulfil my dreams.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/Mokone_Mofokeng.JPG" class="testimonial-img" alt="">
                  <h3>Mokone Mofokeng</h3>
                  <h4>Former student of Maluti TVET College</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    The quality training that I got from Maluti TVET College pushed me to become my own boss. I am the successful owner of Monoceros Electrical company.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>

  </main><!-- End #main -->

  @endsection