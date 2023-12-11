@extends('layouts.master')

@section('content')


<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>Career Guidance</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/resources">Resources</a></li>
      <li>Career Guidance</li>
    </ul>
  </div>
</div>

<!-- Our Blog Wrapper End -->
<div class="our-blog-wrapper">
  <div class="container">
  <div class="new">
    <div class="row">  
    @foreach ($careerguidance as $cguidance) 
          <div class="col-sm-12 col-lg-4">
            <div class="single-blog">
              <figure class="single-blog-img green"> <embed alt="" src="{{url('files')}}/{{$cguidance->file}}#page=1" type="application/pdf" height="250">
                <div><i class="fa fa-plus"></i></div>
                <a href="{{url('files')}}/{{$cguidance->file}}"></a> </figure>
              <div class="post-tittle">
                <h4><a href="{{url('files')}}/{{$cguidance->file}}">{{$cguidance->title}}</a></h4>
              </div>
            <a class="btn small" href="{{url('files')}}/{{$cguidance->file}}">Open Document</a>
          </div>
      
    </div>
    @endforeach
    </div>
  </div>
</div>
<!-- Our Blog Wrapper End --> 

 @endsection