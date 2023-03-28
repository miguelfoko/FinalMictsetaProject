@extends('layouts.master')

@section('content')


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pricing</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

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
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

 @endsection