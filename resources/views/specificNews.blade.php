@extends('layouts.master')

@section('content')


  <main id="main" data-aos="fade-up">


      <div class="container" >
	  
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
  


  </main><!-- End #main -->

  @endsection