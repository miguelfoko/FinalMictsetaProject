@extends('layouts.master')

@section('content')


  <main id="main">
  <section id="pricing" class="pricing">
      <div class="container-fluid" data-aos="fade-up">
      <div class="member2" >
         Career Guidance
        </div>
        </div>
        <div class="container" data-aos="fade-up">
        <div class="row">

        @foreach ($careerguidance as $cguidance) 

        <div class="col-lg-3 col-md-6 ">
            <div class="box featured text-center">
              <h3 >{{$cguidance->title}}</h3>
             
                <div class="theSiteImages">
                <embed src="{{url('files')}}/{{$cguidance->file}}#page=1" type="application/pdf" height="250" width="200">
                  <!--<embed src="{{url('images')}}/{{$cguidance->coverPage}}" height="250" width="200">-->
                </div>
                <a href="{{url('files')}}/{{$cguidance->file}}" target="_blank" rel="noopener" class="btn-buy">Open Document</a>
             
            </div>
          </div>
        @endforeach
        </div>

      </div>
 
</section>
  </main><!-- End #main -->

 @endsection