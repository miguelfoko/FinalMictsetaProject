@extends('layouts.master')

@section('content')


  <main id="main">
 
  <section id="events" class="events">
      <div class="container-fluid" data-aos="fade-up">
        <div class="member2" >
         Regional Locations
        </div>
      </div>

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
    <script async
      src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&region=GB&callback=initMap">
  </script>

    <div class="container-fluid">
      <div class="row mt-5">
          
            <div class="col-lg-6 mt-5 mt-lg-0" id="map"> </div>
              <div class="no">
                {{$i=0}} {{$j=0}}
              </div>
            @foreach ($regionallocations as $regionallocation)        
            <div class="col-lg-3">

            
              <div class="dropdown">
                  <button id="toggle{{$j=$j+1}}" onclick="myFunction()" class="dropbtn" >{{$regionallocation->region}} <i class="fa fa-caret-down"></i></button>
                  <div id="{{$i=$i+1}}" class="dropdown-content">
                  <div class="address">
                      <p>{{$regionallocation->address}}</p>
                      </div>
                      <div class="email">
                        <h4>City</h4> 
                        <p>{{$regionallocation->city}}</p>
                      </div>
                      <div class="email">
                        <h4>Principal</h4>  
                        <p>Name: {{$regionallocation->principal}}</p>
                        <p>Emails: {{$regionallocation->principalEmails}}
                      </div>
                      <div class="email">
                        <h4>Principal Assistant</h4> 
                        <p>Name: {{$regionallocation->principalAssistant}}</p>
                        <p>Emails: {{$regionallocation->principalAssistantEmails}}</p>
                      </div>
                      <div class="email">
                        <h4>Website</h4> 
                        <a href="{{$regionallocation->websiteAddress}}" target=”_blank”>{{$regionallocation->websiteAddress}}</a>
                      </div>
                      <div class="phone">
                        <h4>Contact Number</h4>
                        <p>{{$regionallocation->phone}}</p>
                      </div>
                    </div>
              </div>
            </div>
           
            @endforeach  
          
            </div> 
          </div>
          <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          var toggles = document.getElementsByTagName("button");
          const buttonPressed = e => {
            //alert(e.target.id);  // Get ID of Clicked Element
            var theId=e.target.id.substring(6);
            //alert(theId);
            var openDropdown = document.getElementById(theId);
            if (openDropdown.style.display !== "none") {
                openDropdown.style.display = "none";
            } else {
              openDropdown.style.display = "block";
            }
          }
          for (let button of toggles) {
            button.addEventListener("click", buttonPressed);
          }  
        }

         // Close the dropdown if the user clicks outside of it
         window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }

      
    </script>
        </section>  
  </main><!-- End #main -->

 @endsection