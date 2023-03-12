@extends('layouts.master')

@section('content')


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Events</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        @foreach ($news as $new) 
         
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="member">
                <img src="{{ asset('/images/'.$new->picture) }}" class="img-fluid" alt="">
                <div class="member-content">
                  <h4>{{ $new->title }}</h4>
                  <span>{{ $new->subtitle }}</span>
                  <a class="btn btn-primary" href="{{route('viewNews.show',$new->id)}}">Read more</a> 
                  
                </div>
              </div>
            </div>
        @endforeach

        </div>
      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->
  @endsection