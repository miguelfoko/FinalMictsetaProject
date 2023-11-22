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
    <div class="title text-center">
      <h2>Our <span>Services</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
      <div class="separator my"> <i class="icofont icofont-hat-alt"></i> </div>
    </div>
    <div class="row">
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service"><span class="icofont icofont-hat-alt"></span>
          <div class="caption">
            <h4> Awesome Courses</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service"><span class="icofont icofont-teacher"></span>
          <div class="caption">
            <h4>Qualified Teachers</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service"><span class="icofont icofont-brand-android-robot"></span>
          <div class="caption">
            <h4> App Development</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-xl-3">
        <div class="single-service"><span class="icofont icofont-globe-alt"></span>
          <div class="caption">
            <h4> Online Classes</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod te incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
</div>
<!-- Our Services Wrapper End --> 
  
@endsection
