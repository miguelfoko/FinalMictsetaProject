@extends('layouts.master')

@section('content')



<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapperICASSTrainingVideos">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1> ICASS Training Videos</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/examinations">Examinations</a></li>
      <li> ICASS Training Videos</li>
    </ul>
  </div>
</div>


<!-- Our Blog Wrapper End -->
<div class="our-blog-wrapper">
  <div class="container">
  <div class="new">
    <div class="row">  
    @foreach ($icasstrainingvideos as $icasstrainingvideo) 
          <div class="col-sm-12 col-lg-4">
            <div class="single-blog">
              <figure class="single-blog-img green"> 
                <iframe width="320" height="240" 
                    src="{{$icasstrainingvideo->video}}" title="{{$icasstrainingvideo->title}}" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe> 
              </figure>
              <div class="post-tittle">
                <h4>Module {{$icasstrainingvideo->module}}-Session {{$icasstrainingvideo->session}}</h4>
                <p>{{$icasstrainingvideo->title}}</p>
              </div>
            <a class="btn small" href="{{$icasstrainingvideo->video}}" download>Download</a>
          </div>
      
    </div>
    @endforeach
    </div>
  </div>
</div>
<!-- Our Blog Wrapper End --> 
 
<div class="my_nav">
      {{ $icasstrainingvideos->links() }}
    </div>
 @endsection