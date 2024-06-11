@extends('layouts.master')

@section('content')

<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapperCollegeAndSETATimes">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>TVET College Times</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li>TVET College Times</li>
    </ul>
  </div>
</div>


<!-- Our Blog Wrapper End -->
<div class="our-blog-wrapper">
  <div class="container">
  <div class="new">
    <div class="row">  
    @foreach ($tvetcollegetimes as $tctimes) 
          <div class="col-sm-12 col-lg-4">
            <div class="single-blog"> 
              <figure class="single-blog-img green"> <img alt="" src="{{url('images')}}/{{$tctimes->coverPage}}">
                <div><i class="fa fa-plus"></i></div>
                <a href="{{url('files')}}/{{$tctimes->file}}"></a> </figure>
              <div class="post-tittle">
                <h4><a href="{{url('files')}}/{{$tctimes->file}}">{{$tctimes->title}}</a></h4>
              </div>
              <ul class="blogDate">
                <li> <i aria-hidden="true" class="fas fa-pencil-alt"></i><span>{{$tctimes->volume}}</span> </li>
                <li> <i aria-hidden="true" class="fa fa-calendar"></i> <span>{{$tctimes->publicationDate}}</span> </li>
                <li> <i aria-hidden="true" class="fa fa-bars"></i> <span> Size: {{$tctimes->size}} </span> </li>
              </ul>
            <a class="btn small" href="{{url('files')}}/{{$tctimes->file}}">Open Document</a>
          </div>
      
    </div>
    @endforeach
    </div>
  </div>
</div>
<!-- Our Blog Wrapper End --> 

 @endsection