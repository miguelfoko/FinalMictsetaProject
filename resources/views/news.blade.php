@extends('layouts.master')

@section('content')


  <main id="main">

    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
    <br><br>
      <div class="container-fluid" data-aos="fade-up">
      <div class="member2" >
         Newsletter
        </div> 
        <div class="row" > 
      @foreach ($news as $new) 
         <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
            <a href="/viewNews/{{$new->id}}"> <img src="{{ asset('/images/'.$new->picture) }}" alt="..."> </a>
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