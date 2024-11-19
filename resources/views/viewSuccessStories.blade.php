@extends('layouts.master')

@section('content')


<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapperSuccessStories">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1> Success Stories</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/resources">Resources</a></li>
      <li> Success Stories</li>
    </ul>
  </div>
</div>


<!-- Our Blog Wrapper End -->
<div class="our-blog-wrapper">
  <div class="container">
  <div class="new">
    <div class="row">  
    @foreach ($successstories as $sstory) 
          <div class="col-sm-12 col-lg-4">
            <div class="single-blog">
              <figure class="single-blog-img green"> <img alt="" src="{{url('images')}}/{{$sstory->coverPage}}">
                <div><i class="fa fa-plus"></i></div>
                <a href="{{url('files')}}/{{$sstory->file}}"></a> </figure>
              <div class="post-tittle">
                <h4><a href="{{url('files')}}/{{$sstory->file}}">{{$sstory->title}}</a></h4>
              </div>
            <a class="btn small" href="{{url('files')}}/{{$sstory->file}}">Open Document</a>
          </div>
      
    </div>
    @endforeach
    </div>
  </div>
</div>
<!-- Our Blog Wrapper End --> 

 @endsection