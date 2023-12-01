@extends('layouts.master')

@section('content')

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li>Newsletter</li>
    </ul>
  </div>
</div>

<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper course-wrapper">
  <div class="container">
    <div class="row">
    @foreach ($news as $new) 
      <div class="col-12 col-md-6 col-lg-4">
        <div class="single-blog">
          <div class="single_courses">
            <div class="single_courses_thumb">
              <div class="courses_badge"> <span>New</span> </div>
              <img src="{{ asset('/images/'.$new->picture) }}" alt=""> </div>
            <div class="single_courses_desc">
              <div class="title"> <a href="{{route('viewNews.show',$new->id)}}">{{ $new->title }}</a>
                <p>{{ $new->subtitle }}</p>
              </div>
            </div>
          </div>
          
          <a class="btn small" href="{{route('viewNews.show',$new->id)}}">Read More</a>
        </div>
      </div>
    @endforeach
    </div>
    
    <div class="my_nav">
      {{ $news->links() }}
    </div>
  </div>
</div>
<!-- Inner Page Wrapper End --> 
  @endsection