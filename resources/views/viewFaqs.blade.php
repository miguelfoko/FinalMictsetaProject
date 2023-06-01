@extends('layouts.master')

@section('content')


  <main id="main">
  <section id="events" class="events">
        <div class="container-fluid" data-aos="fade-up">
        <div class="member2" >
         Frequently Asked Questions
        </div>
         </div>
    <div class="container" data-aos="fade-up">
    <div class="new">
            <div class="row  mt-5">

              <div class="no">
              {{$i=$faqs->count()}}
              </div>
          
            @foreach ($faqs as $faq)   
            
              
                <div class="dropdown" >
                      <button onclick="load_faq_content({{$faq->id}},{{$i}})" class="dropbtn" >{{$faq->title}} <i class="fa fa-caret-down"></i></button>
                      <div id="{{$faq->id}}" class="dropdown-content">
                            {!! $faq->content !!}  
                      </div>
                  </div>
                  
              @endforeach  
            </div>
          </div>
        </div>
                  <!--   {{ $faqs->links() }} -->
       <!-- </div>  -->
   
    <script>

        function load_faq_content(theId,i){
            var openDropdown = document.getElementById(theId);
            if(openDropdown.style.display == "block"){
              openDropdown.style.display = "none";
            }else{
              openDropdown.style.display = "block";
            }
            for(j=1;j<=i;j++){
              if(j!=theId){
                openDropdown = document.getElementById(j);
                openDropdown.style.display = "none";
              }
            }
            
        }
       
         // Close the dropdown if the user clicks outside of it
         window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var k;
            for (k = 1; k <= dropdowns.length; k++) {
              var openDropdown = document.getElementById(k);
                openDropdown.style.display = "none";
            }
          }
        }

      
    </script>
</section>
  </main><!-- End #main -->

 @endsection