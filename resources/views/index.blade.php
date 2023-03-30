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

          <div class="col-lg-3">
            <div>
                <div class="card-img">
                  <a href="viewcollegecalendar"> <img src="{{ asset('/img/tvetCallendar.png') }}" class="img-fluid" alt="..."> </a>
                </div>
                <div class="member-content"> 
                  <a href="viewcollegecalendar">Academic Calendar</a> 
                </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div>
                <div class="card-img">
                  <a href="viewsubscribe"> <img src="{{ asset('/img/Subscribe.png') }}" class="img-fluid" alt="..."> </a>
                </div>
                <div class="member-content"> 
                  <a href="viewsubscribe">Subscribe</a> 
                </div>
            </div>
          </div>

          <div class="col-lg-3">
            <div>
                <div class="card-img">
                  <a href="viewfinancialaid"> <img src="{{ asset('/img/NSFAS_Icon.png') }}" class="img-fluid" alt="..."> </a>
                </div>
                <div class="member-content"> 
                  <a href="viewfinancialaid">Financial Aid</a>
                </div>
            </div>
          </div>

          <div class="col-lg-3">
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
    </section>

    <section id="welcometrainer" class="welcometrainer">
      <div class="container-fluid" data-aos="fade-up">
        <div class="member1" >
          Successful TVET Graduates
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('/img/Nashveer_Nemesar_Mokone-Mofokeng.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Mokone Mofokeng</h4>
                <span>Former student of Maluti TVET College</span>
                <p>
                  "The quality training that I got from Maluti TVET College pushed me to become my own boss. I am the 
                  successfull owner of Monoceros Electrical company"
                </p>
                
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('/img/Nashveer-_Nemesar_Majuba.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Snethemba Mpontshane</h4>
                <span>Former Electrical Engineering student at Majuba TVET College</span>
                <p>
                  "I'm a qualified Senior Electrican at Eskom based at the Kusile Power Station in Witbank. The practical 
                  training , advanced equipment that we were exposed to in workshops and highly skilled lecturers laid a 
                  solid foundation for me to achieve success in my profession ."
                </p>
                
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('/img/Nashveer_Nemesar_Sue-Kelly-Maneveld.jpg') }}" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sue-Kelly Maneveld</h4>
                <span>Former student of College of Cape Town TVET</span>
                <p>
                  "I am the pround owner of Be-Dazzle hair and Beauty salons. All of this would not have been possible 
                  without the College of Cape Town being a stepping stone and allowing me to fulfil my dreams."               </p>
                
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Trainers Section -->
    <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">
      <div class="member1" >
        LATEST NEWS
      </div>
      <div class="row">

      @foreach ($news as $new) 
         <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
            <a href="faqs"> <img src="{{ asset('/images/'.$new->picture) }}" alt="..."> </a>
            </div>
            <div class="card-body"> 
                <h5 class="card-title"><a href="{{route('viewNews.show',$new->id)}}">{{ $new->title }}</a></h5>
                <p class="fst-italic text-center">
                {{ $new->subtitle }}
                </p>
                
                <p class="fst-italic text-center">
                <a href="{{route('viewNews.show',$new->id)}}">Read more</a></p>
            </div>
            </div>
          </div>
        @endforeach
        </div>

        </div>
      </div>
    </section><!-- End Events Section -->

    <section id="trainers" class="trainers">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-12 col-md-6 d-flex align-items-stretch">
            <div class="member">
             <a href="#"> <img src="{{ asset('/img/NSFAS-design-Homepage.jpg') }}" class="img-fluid" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </main><!-- End #main -->
   
  @endsection
