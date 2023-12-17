@extends('layouts.master')

@section('content')

<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>Our Address</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/contactus">Contact us</a></li>
      <li>Our Address</li>
    </ul>
  </div>
</div>

<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper our-faq-wrapper">
  <div class="container">
  <div class="title text-center">
      <h2> Our<span> Address</span></h2>
  </div>  
     <div class="no">
       {{$i=$regionallocations->count()}}
       {{$j=$i/2+1}}
       {{$k=1}}
     </div>
    <div class="row">
    
      <div class="col-lg-6">
            <div class="accordion" id="accordion">
              @foreach ($regionallocations as $regionallocation)
                @if($k%2)
                <div class="card">
                  <div class="card-header" id="heading{{$k}}">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$k}}" aria-expanded="false" aria-controls="collapse{{$k}}"> {{$regionallocation->region}} </button>
                    </h5>
                  </div>
                  <div id="collapse{{$k}}" class="collapse" aria-labelledby="heading{{$k}}" data-parent="#accordion">
                    <div class="card-body"> 
                        <h5>Address</h5> 
                          <p>{{$regionallocation->address}}</p>
                        <h5>City</h5> 
                          <p>{{$regionallocation->city}}</p>
                        <h5>Principal</h5>  
                          <p>Name: {{$regionallocation->principal}}</p>
                          <p>Emails: {{$regionallocation->principalEmails}}
                        <h5>Principal Assistant</h5> 
                          <p>Name: {{$regionallocation->principalAssistant}}</p>
                          <p>Emails: {{$regionallocation->principalAssistantEmails}}</p>
                        <h5>Website</h5> 
                          <a href="{{$regionallocation->websiteAddress}}" target=”_blank”>{{$regionallocation->websiteAddress}}</a>
                        <h5>Contact Number</h5>
                          <p>{{$regionallocation->phone}}</p>
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
      <div class="col-lg-6">
        <div class="no">
          {{$k=$j-1}}
        </div>
        <div class="accordion" id="accordion2">
          @foreach ($regionallocations as $regionallocation)
            @if($k%2)


            <div class="card">
                  <div class="card-header" id="heading{{$k}}">
                    <h5 class="mb-0">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{$k}}" aria-expanded="false" aria-controls="collapse{{$k}}"> {{$regionallocation->region}} </button>
                    </h5>
                  </div>
                  <div id="collapse{{$k}}" class="collapse" aria-labelledby="heading{{$k}}" data-parent="#accordion">
                    <div class="card-body"> 
                    <h5>Address</h5> 
                      <p>{{$regionallocation->address}}</p>
                    <h5>City</h5> 
                      <p>{{$regionallocation->city}}</p>
                    <h5>Principal</h5>  
                      <p>Name: {{$regionallocation->principal}}</p>
                      <p>Emails: {{$regionallocation->principalEmails}}
                    <h5>Principal Assistant</h5> 
                      <p>Name: {{$regionallocation->principalAssistant}}</p>
                      <p>Emails: {{$regionallocation->principalAssistantEmails}}</p>
                    <h5>Website</h5> 
                      <a href="{{$regionallocation->websiteAddress}}" target=”_blank”>{{$regionallocation->websiteAddress}}</a>
                    <h5>Contact Number</h5>
                      <p>{{$regionallocation->phone}}</p>
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

  <!-- Google Map Start -->
  <div class="col-lg-12 mt-5 mt-lg-0" align="center" id="map"> </div>

  <!-- Google Map End -->  
  </div>
<br>
<script type="text/javascript"> 
          function initMap() {
              const myLatLng = { lat: -25.760319754713873, lng: 28.190917968750004 };
              const map = new google.maps.Map(document.getElementById("map"), {
                  zoom: 5,
                  center: myLatLng,
              });
              var infowindow = new google.maps.InfoWindow();
              var marker, i;
              @foreach ($regionallocations as $regionallocation) 
                    var latitude= {{ Js::from($regionallocation->latitude) }};
                    var longitude= {{ Js::from($regionallocation->longitude) }};
                    var texttitle= {{ Js::from($regionallocation->region) }};
                    marker = new google.maps.Marker({
                      position: new google.maps.LatLng(latitude, longitude),
                      title:texttitle,
                      map: map
                    });             
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                      return function() {
                        infowindow.setContent(locations[i][0]);
                        infowindow.open(map, marker);
                      }
                    })(marker, i));
              @endforeach  
          }
          window.initMap = initMap;
    </script>
    <script async
      src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&region=GB&callback=initMap">
  </script>
<!-- Inner Page Wrapper End -->
 


 @endsection