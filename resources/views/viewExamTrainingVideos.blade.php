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
<br><br>
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container-fluid" data-aos="fade-up">
      <div class="member2" >
         Examination Training Videos
        </div>
        <div class="row">
        @foreach ($examtrainingvideos as $examtrainingvideo) 

        <div class="col-lg-3 col-md-6 ">
            <div class="box featured">
            <h3>Module {{$examtrainingvideo->module}}-Session {{$examtrainingvideo->session}}</h3>
              
                <div >
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
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

 @endsection