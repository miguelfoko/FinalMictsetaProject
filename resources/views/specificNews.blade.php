@extends('layouts.master')

@section('content')


  <main id="main" data-aos="fade-up">


      <div class="container-fluid" >
      <div class="noUseOfWysiwyg">
        <h3>{{$news->title }} </h3>
        <h4>{{$news->subtitle }} </h4>
        <img class="centering" src="{{ asset('/images/'.$news->picture) }}" alt="">
        {!! $news->content !!} 
    
    
        <div class="centering">
            <iframe width="560" height="315" src= "{{ $news->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
    
 

      </div>
  


  </main><!-- End #main -->

  @endsection