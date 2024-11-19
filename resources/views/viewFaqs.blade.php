@extends('layouts.master2')

@section('content')

<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapperFAQ">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>FAQ</h1>
  </div> 
</div>
 
<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/contactus">Contact us</a></li>
      <li>Frequently Asked Questions</li>
    </ul>
  </div>
</div>
 

<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper our-faq-wrapper">
  <div class="container">
  <div class="title text-center">
    <h2>Asked <span>Questions</span></h2>
  </div>  
     <div class="no">
       {{$i=$faqs->count()}}
       {{$j=$i/2+1}}
       {{$k=1}}
     </div>
    <div class="row">
    
      <div class="col-lg-12">
            <div class="accordion" id="accordion">
              @foreach ($faqs as $faq)
                @if($k%2)
                <div class="card">
                  <div class="card-header" id="heading{{$k}}">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$k}}" aria-expanded="false" aria-controls="collapse{{$k}}"> {{$faq->title}}  </button>
                    </h5>
                  </div>
                  <div id="collapse{{$k}}" class="collapse" aria-labelledby="heading{{$k}}" data-parent="#accordion">
                    <div class="card-body"> 
                      {!! $faq->content !!}
                    </div>
                  </div>
                </div>  
                @endif  
                <div class="no">
                  {{$k++}}
                </div>
              @endforeach
            </div>

          
      </div>
      <div class="col-lg-12">
        <div class="no">
          {{$k=$j-1}}
        </div>
        <div class="accordion" id="accordion2">
          @foreach ($faqs as $faq)
            @if($k%2)


            <div class="card">
                  <div class="card-header" id="heading{{$k}}">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$k}}" aria-expanded="false" aria-controls="collapse{{$k}}">{{$faq->title}}  </button>
                    </h5>
                  </div>
                  <div id="collapse{{$k}}" class="collapse" aria-labelledby="heading{{$k}}" data-parent="#accordion">
                    <div class="card-body"> 
                      {!! $faq->content !!}
                    </div>
                  </div>
            </div> 

            @endif   
            <div class="no">
              {{$k++}}
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Inner Page Wrapper End -->  
 @endsection