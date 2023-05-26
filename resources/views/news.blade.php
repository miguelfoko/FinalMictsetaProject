@extends('layouts.master')

@section('content')


  <main id="main" data-aos="fade-up">

    <!-- ======= Events Section ======= -->
  
      <div class="container-fluid" >
      <div class="member2" >
         Newsletter
        </div> 
        </div> 
        <div class="container" >
        <div class="new">
        <div class="row" > 
      @foreach ($news as $new) 
         <div class="col-lg-4" align="center">
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
        </div>
        {{ $news->links() }}

      </div>
   

  </main><!-- End #main -->
  @endsection