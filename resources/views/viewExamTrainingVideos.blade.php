@extends('layouts.master')

@section('content')


<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapperExamanitionsTrainingVideos">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1> Examination Training Videos</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/examinations">Examinations</a></li>
      <li> Examination Training Videos</li>
    </ul>
  </div>
</div>


<!-- Our Blog Wrapper End -->
<div class="our-blog-wrapper">
  <div class="container">
  <div class="new">
    <div class="row">  
    @foreach ($examtrainingvideos as $examtrainingvideo) 
          <div class="col-sm-12 col-lg-4">
            <div class="single-blog">
              <figure class="single-blog-img green"> 
                  <iframe width="320" height="240" 
                          src="{{$examtrainingvideo->video}}" title="{{$examtrainingvideo->title}}" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                      </iframe> 
                  <!--
                      <iframe width="560" height="315" src="https://www.youtube.com/embed/aFBbybv-YLI?si=HJsmyPmpeXMicHne" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>   
                   
                      <video width="320" height="240" controls>
                        <source src="{{url('videos')}}/{{$examtrainingvideo->video}}" type="video/mp4/mov/AVI/WMV/FLV/MPEG/3GPP/WebM/MPEG PS/DNxHR/ProRes/CineForm/HEVC (h265)">
                        Your browser does not support the video tag 
                    </video> 
                    -->
              </figure>
              <div class="post-tittle">
                <h4>Module {{$examtrainingvideo->module}}-Session {{$examtrainingvideo->session}}</h4>
                <p>{{$examtrainingvideo->title}}</p>
              </div>
            <a class="btn small" href="{{$examtrainingvideo->video}}" download>Download</a>
          </div>
        
    </div>
    @endforeach
    </div>
  </div>
</div>
<!-- Our Blog Wrapper End --> 

<div class="my_nav">
      {{ $examtrainingvideos->links() }}
    </div>
 @endsection