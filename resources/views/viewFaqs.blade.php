@extends('layouts.master')

@section('content')


  <main id="main">
  
    <br> <br>
    <br> <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
        <div class="member2" >
         Frequently Asked Questions
        </div>
    
        <div style="margin-top: 60px;" class="container">
            <div class="row">

            <div class="no">
            {{$i=0}} {{$j=0}}
            </div>
            @foreach ($faqs as $faq)   
                
              
                <div class="dropdown" >
                      <button id="toggle{{$j=$j+1}}" onclick="myFunction()" class="dropbtn" >{{$faq->title}} <i class="fa fa-caret-down"></i></button>
                      <div id="{{$i=$i+1}}" class="dropdown-content">
                            {!! $faq->content !!}  
                      </div>
                  </div>
                         
              @endforeach  
  
          </div>
        </div>
                  <!--   {{ $faqs->links() }} -->
       <!-- </div>  -->
    </section><!-- End Contact Section -->
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

  </main><!-- End #main -->

 @endsection