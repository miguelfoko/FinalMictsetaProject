@extends('layouts.master')

@section('content')


  <main id="main">

      <div class="container-fluid" data-aos="fade-up">
      <div class="member2" >
         Examination Training Videos
        </div>
         </div>
         <div class="container" data-aos="fade-up">
        <div class="new">
        <div class="row">
        @foreach ($examtrainingvideos as $examtrainingvideo) 

        <div class="col-lg-3 col-md-6 ">
            <div class="box featured text-center">
            <h3>Module {{$examtrainingvideo->module}}-Session {{$examtrainingvideo->session}}</h3>
              
            <div class="theSiteImages">
                            <video width="320" height="240" controls>
                                <source src="{{url('videos')}}/{{$examtrainingvideo->video}}" type="video/mp4">
                                Your browser does not support the video tag
                            </video>        
                </div> 
                <h6>{{$examtrainingvideo->title}}</h6>
                <a href="{{url('videos')}}/{{$examtrainingvideo->video}}" download>Download</a>

            </div>
          </div>
        @endforeach
        </div>
</div>
      </div>
   

  </main><!-- End #main -->

 @endsection