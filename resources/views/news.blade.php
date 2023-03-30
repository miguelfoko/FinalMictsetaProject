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
      <div class="container-fluid" data-aos="fade-up">
      <div class="row">

      @foreach ($news as $new) 
         <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
            <a href="faqs"> <img src="{{ asset('/images/'.$new->picture) }}" alt="..."> </a>
            </div>
            <div class="card-body"> 
                <h5 class="card-title"><a href="{{route('viewNews.show',$new->id)}}">{{ $new->title }}</a></h5>
                <p class="fst-italic text-center">
                {{ $new->subtitle }}
                </p>
                
                <p class="fst-italic text-center">
                <a href="{{route('viewNews.show',$new->id)}}">Read more</a></p>
            </div>
            </div>
          </div>
        @endforeach
        </div>

        </div>
        {{ $news->links() }}

      </div>
    </section><!-- End Events Section -->

  </main><!-- End #main -->
  @endsection