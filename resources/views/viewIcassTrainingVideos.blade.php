@extends('layouts.master')

@section('content')


  <main id="main">

      <div class="container-fluid" data-aos="fade-up">
      <div class="member2" >
         ICASS Training Videos
        </div>
        </div>
        <div class="container" data-aos="fade-up">
        <div class="new">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach ($icasstrainingvideos as $icasstrainingvideo) 

            <div class="col-lg-3 col-md-6 ">
              <div class="box featured text-center">
                Module {{$icasstrainingvideo->module}}-Session {{$icasstrainingvideo->session}}
                
                <div class="theSiteImages">
                              <video width="320" height="240" controls>
                                  <source src="{{url('videos')}}/{{$icasstrainingvideo->video}}" type="video/mp4">
                              </video>        
                  </div>
                  {{$icasstrainingvideo->title}}<br>
                  <a href="{{url('videos')}}/{{$icasstrainingvideo->video}}" download>Download</a>

              </div>
            </div>
          @endforeach
        </div>
    </div>
      </div>
    
  </main><!-- End #main -->

 @endsection