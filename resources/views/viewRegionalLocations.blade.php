@extends('layouts.master')

@section('content')


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Pricing</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
<br><br>
<br>


    <div class="container mt-5">

        <h2>Laravel Google Maps Multiple Markers Example - ItSolutionStuff.com</h2>

        <div id="map"></div>

    </div>

    <script type="text/javascript"> 
          function initMap() {
              const myLatLng = { lat: 22.2734719, lng: 70.7512559 };
              const map = new google.maps.Map(document.getElementById("map"), {
                  zoom: 5,
                  center: myLatLng,
              });
              var infowindow = new google.maps.InfoWindow();
              var marker, i;
              @foreach ($regionallocations as $regionallocation) 
                    var latitude= {{ Js::from($regionallocation->latitude) }};
                    var longitude= {{ Js::from($regionallocation->longitude) }};
                    marker = new google.maps.Marker({
                      position: new google.maps.LatLng(latitude, longitude),
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
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" ></script>

      <div style="margin-top: 60px;" class="container">
            <div class="row">
            @foreach ($regionallocations as $regionallocation) 
              <div class="col-lg-4">
                <div class="faq-container">
                  <div class="faq">
                  <h2 class="question">{{$regionallocation->region}}</h2>
                    <div class="address">
                      <p>{{$regionallocation->address}}</p>
                    </div>
                    <div class="email">
                      <h4>City</h4> 
                      <p>{{$regionallocation->city}}</p>
                    </div>
                    <div class="phone">
                      <h4>Contact Number</h4>
                      <p>{{$regionallocation->phone}}</p>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach  
            {{ $regionallocations->links() }}
          </div>

          
  </main><!-- End #main -->

 @endsection