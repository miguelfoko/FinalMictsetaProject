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
          <a href="/viewcollegecalendar"><img src="{{ asset('/img/tvetCallendar.png') }}" alt="..."></a> 
          </span>
          <div class="caption">
            <h4><a href="/viewcollegecalendar">Academic Calendar</a> </h4>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service">
          <span class="icofont ">
          <h4><a href="/viewgetintouch"><img src="{{ asset('/img/Subscribe.png') }}" alt="..."></a>  </h4>
          </span>
          <div class="caption">
          <h4><a href="/viewgetintouch">Subscribe</a> 
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service">
          <span class="icofont ">
          <a href="https://www.nsfas.org.za/" target=”_blank”><img src="{{ asset('/img/NSFAS_Icon.png') }}" alt="..."></a> 
          </span>
          <div class="caption">
          <h4><a href="https://www.nsfas.org.za/" target=”_blank”>Financial Aid</a> </h4>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service">
          <span class="icofont ">
          <a href="/viewcareerguidance" ><img src="{{ asset('/img/Careers_Icon.png') }}" alt="..."></a> </h4>
          </span>
          <div class="caption">
          <h4><a href="/viewcareerguidance">Career Guidance</a> 
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
   <div class="new">
    <div class="row">
      @foreach ($succesfulTvetGraduates as $succesfulTvetGraduate) 
          <div class="col-sm-12 col-lg-4">
            <div class="single-blog">
              <figure class="single-blog-img green"> 
              <img src="{{ asset('/images/'.$succesfulTvetGraduate->picture) }}"  alt="">
              
                <div><i class="fa fa-plus"></i></div>
                <a href="#"></a> </figure>
              <div class="post-tittle">
                <h4><a href="#">{{ $succesfulTvetGraduate->name }}</a></h4>
              </div>
              <span>{{ $succesfulTvetGraduate->title }}</span>
                    <p class="fst-italic">
                      "{{ $succesfulTvetGraduate->content }}"
                    </p>
              <!--<a class="btn small" href="javascript:void(0)">Read More</a>-->
            </div>
          </div>
      @endforeach

	 
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
                          <a href="{{route('viewNews.show',$new->id)}}" style="color:#F7931E;">Read more</a>
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
