@extends('layouts.master')

@section('content')


  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>Contact Us</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
    <br> <br>
    <br> <br>
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
        <div class="member2" >
         Frequently Asked Questions
        </div>
    
            
            {{ $faqs->links() }}

            @foreach ($faqs as $faq)        
            
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn" >{{$faq->title}} <i class="fa fa-caret-down"></i></button>
                    <div id="myDropdown" class="dropdown-content">
                          {!! $faq->content !!}  
                    </div>
                </div>
                
            @endforeach  
            {{ $faqs->links() }}
        </div>  
    </section><!-- End Contact Section -->
    <script>
        /* When the user clicks on the button, 
        toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
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