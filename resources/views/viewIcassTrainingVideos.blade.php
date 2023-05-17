@extends('layouts.master')

@section('content')


  <main id="main">

      <div class="container-fluid" data-aos="fade-up">
      <div class="member2" >
         ICASS Training Videos
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">
          @foreach ($icasstrainingvideos as $icasstrainingvideo) 

            <div class="col-lg-3 col-md-6 ">
              <div class="box featured">
                <h3>Module {{$icasstrainingvideo->module}}-Session {{$icasstrainingvideo->session}}</h3>
                
                  <div >
                              <video width="320" height="240" controls>
                                  <source src="{{url('videos')}}/{{$icasstrainingvideo->video}}" type="video/mp4">
                                  
                              </video>        
                  </div>
                  <h6>{{$icasstrainingvideo->title}}</h6>
                  <a href="{{url('videos')}}/{{$icasstrainingvideo->video}}" download>Download</a>

              </div>
            </div>
          @endforeach
        </div>

      </div>
    
  </main><!-- End #main -->

 @endsection