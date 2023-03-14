@extends('layouts.master')

@section('content')


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
          <h2>About Us</h2>
          <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
        </div>
      </div><!-- End Breadcrumbs -->

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