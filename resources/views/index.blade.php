@extends('layouts.master')

@section('content')

<div class="slider-area">
  
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
  
</div>

<!-- Our Services Wrapper Start -->
<div class="services-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service">
          <span class="icofont ">
          <a href="viewcollegecalendar"><img src="{{ asset('/img/tvetCallendar.png') }}" alt="..."></a> 
          </span>
          <div class="caption">
            <a href="viewcollegecalendar">Academic Calendar</a> 
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service">
          <span class="icofont ">
          <a href="viewsubscribe"><img src="{{ asset('/img/Subscribe.png') }}" alt="..."></a> 
          </span>
          <div class="caption">
            <a href="viewsubscribe">Subscribe</a> 
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service">
          <span class="icofont ">
          <a href="https://www.nsfas.org.za/" target=”_blank”><img src="{{ asset('/img/NSFAS_Icon.png') }}" alt="..."></a> 
          </span>
          <div class="caption">
            <a href="https://www.nsfas.org.za/" target=”_blank”>Financial Aid</a> 
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service">
          <span class="icofont ">
          <a href="viewcareerguidance" ><img src="{{ asset('/img/Careers_Icon.png') }}" alt="..."></a> 
          </span>
          <div class="caption">
            <a href="viewcareerguidance">Career Guidance</a> 
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<!-- Our Services Wrapper End --> 

<!-- Successful TVET Graduates -->
<div class="our-team-wrapper">
  <div class="container">
  <div class="title text-center">
      <h2> Successful<span> TVET Graduates</span></h2>
      <div class="separator my"> <i class="icofont icofont-hat-alt"></i> </div>
    </div>  

    <div class="row">
      <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <figure class="single-blog-img green"> 
          <img src="{{ asset('/img/Nashveer_Nemesar_Mokone-Mofokeng.jpg') }}"  alt="">
          
            <div><i class="fa fa-plus"></i></div>
            <a href="#"></a> </figure>
          <div class="post-tittle">
            <h4><a href="#">Mokone Mofokeng</a></h4>
          </div>
          <span>Former student of Maluti TVET College</span>
                <p class="fst-italic">
                  "The quality training that I got from Maluti TVET College pushed   
                  me to become my own boss. I am the successfull owner of Monoceros Electrical company"
                </p>
		      <a class="btn small" href="javascript:void(0)">Read More</a>
        </div>
      </div>

      <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <figure class="single-blog-img green"> 
          <img src="{{ asset('/img/Nashveer-_Nemesar_Majuba.jpg') }}"  alt="">
            <div><i class="fa fa-plus"></i></div>
            <a href="#"></a> </figure>
          <div class="post-tittle">
            <h4><a href="#">Snethemba Mpontshane</a></h4>
          </div>
          <span>Former Electrical Engineering student at Majuba TVET College</span>
          <p class="fst-italic">
                  "I'm a qualified Senior Electrican at Eskom based at the Kusile Power 
                 Station in Witbank. The practical training , advanced equipment that we were exposed to in
                     workshops and highly skilled lecturers laid a solid foundation for me to achieve success in my 
                     profession ."
                </p>
		      <a class="btn small" href="javascript:void(0)">Read More</a>
        </div>
      </div>

      <div class="col-sm-12 col-lg-4">
        <div class="single-blog">
          <figure class="single-blog-img green"> 
          <img src="{{ asset('/img/Nashveer_Nemesar_Sue-Kelly-Maneveld.jpg') }}"  alt="">
            <div><i class="fa fa-plus"></i></div>
            <a href="#"></a> </figure>
          <div class="post-tittle">
            <h4><a href="#">Sue-Kelly Maneveld</a></h4>
          </div>
          <span>Former student of College of Cape Town TVET</span>
          <p class="fst-italic">
            "I am the pround owner of Be-Dazzle hair and Beauty salons. All of this would  not have been possible without the
            College of Cape Town being a stepping stone and allowing me to fulfil my dreams."  
          </p>
		      <a class="btn small" href="javascript:void(0)">Read More</a>
        </div>
      </div>
     
	 
    </div>
  </div>
</div>
<!-- Successful TVET Graduates end --> 


<!-- Latest news start -->

<div class="our-pricing-wrapper">
  <div class="container">
    <div class="title text-center">
      <h2> LATEST<span> NEWS</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
      <div class="separator my"><i class="icofont icofont-hat-alt"></i> </div>
    </div>
  </div>
</div>
<div class="our-testimonials-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
        <div class="owl-carousel testimoni owl-theme">
          @foreach ($news as $new) 
            <div class="item">
              <div class="row">
                <div class="col-sm-9 col-12 order-sm-0 order-2">
                  <p>{{ $new->subtitle }}</p>
                  <p class="name">{{ $new->title }}</p>
                  <p class="fst-italic">
                          <a href="{{route('viewNews.show',$new->id)}}">Read more</a>
                      </p>
                </div>
                <div class="col-sm-3 offset-sm-0 col-4 offset-4 order-sm-0 order-1">
                  <div class="testimoni-img">
                    <a href="{{route('viewNews.show',$new->id)}}"> <img src="{{ asset('/images/'.$new->picture) }}" class="img-fluid" alt="..."> </a> 
                  </div>
                </div>
              </div>
            </div>
          @endforeach
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Latest news end --> 
<main id="main">

   

    <section id="trainers" class="trainers">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-lg-12">
            <div class="member">
             <a href="https://www.nsfas.org.za/" target=”_blank”> <img src="{{ asset('/img/NSFAS-design-Homepage.jpg') }}" class="img-fluid" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </main><!-- End #main -->
   

  

@endsection
