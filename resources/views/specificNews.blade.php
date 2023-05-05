@extends('layouts.master')

@section('content')


  <main id="main">

<br><br>
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
	  
    <h3>{{$news->title }} </h3>
    <h4>{{$news->subtitle }} </h4>
    <img src="{{ asset('/images/'.$news->picture) }}" class="img-fluid" alt="">
    {!! $news->content !!} 
    
    <div class="media">
        <div class="media-body">
            <iframe width="100%" height="315" src="{{ $news->link }}" frameborder="0" allowfullscreen>
            </iframe>
        </div>
    </div>
    
 

      </div>
    </section><!-- End About Section -->


  </main><!-- End #main -->

  @endsection