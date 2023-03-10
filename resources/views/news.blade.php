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

        <div class="row">
        @foreach ($news as $new)
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
            
              <div class="card-img">
              <img src="{{ asset('/images/'.$new->picture) }}" alt="" class="img-fluid" width=200px heigh=200px>
              </div>
              
              <div class="card-body" width=200px heigh=200px>
                <h5 class="card-title"><a href="">{{ $new->title }}</a></h5>
                <p class="fst-italic text-center">{{ $new->subtitle }}</p>
                <p class="card-text">{!! $new->content !!}</p>
              </div>
             
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->
  @endsection