@extends('layouts.master')

@section('content')

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/contactus">Contact us</a></li>
      <li>Frequently Asked Questions</li>
    </ul>
  </div>
</div>
 


<!-- Our FAQ Wrapper start -->
<div class="our-faq-wrapper">
  <div class="container">
    <div class="title text-center">
      <h2>Asked <span>Questions</span></h2>
      <div class="separator my"> <i class="icofont icofont-hat-alt"></i> </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="accordion" id="accordion">
        @foreach ($faqs as $faq)   
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> >{{$faq->title}} </button>
              </h5>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body"> {!! $faq->content !!}   </div>
            </div>
          </div>
          @endforeach  
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Our FAQ Wrapper End --> 

 
 @endsection