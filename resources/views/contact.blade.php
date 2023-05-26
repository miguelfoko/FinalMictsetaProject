@extends('layouts.master')

@section('content')

  <main id="main" data-aos="fade-up">

   
      <div class="container-fluid" >
      <div class="member2" >
         Contact 
        </div>
        </div>
        <div class="container" >
        <div class="new">
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
                <div class="card-img">
                    <a href="viewgetintouch"><img src="{{ asset('/img/ContactUsDetails.png') }}" alt="..."></a>
                </div>
                <div class="card-body text-center">
                    <h5 class="card-title"><a href="viewgetintouch">Contact Details</a></h5>
                    <p class="fst-italic text-center">We would love to hear from you if you would like to get more information,
                      please feel free to <a href="#">contact us</a>.
                    </p>
                    
                    <p class="fst-italic text-center">
                    0800 87 2222 | callcentre@dhet.gov.za
                    </p>
                    <p class="fst-italic text-center">or simply click the link below  to complete our contact form
                    </p>
                    <!--
                      <p class="fst-italic text-center">
                        <a href="viewgetintouch"> Get In Touch</a>
                      </p>
                    -->
                </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
            <a href="viewregionallocations"> <img src="{{ asset('/img/OurRegionalLocations.png') }}" alt="..."> </a>
            </div>
            <div class="card-body text-center">
                <h5 class="card-title "><a href="viewregionallocations">Our Regional Locations</a></h5>
                <p class="fst-italic text-center">
                  The technical and Vocational Education and training (TVET) branch of DHET is responsible for all things TVET does so through its 6 regional office locations
                </p>
                <!--
                  <p class="fst-italic text-center">
                    <a href="viewregionallocations">View Location Details</a>
                  </p>
                -->
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
            <a href="viewfaqs"> <img src="{{ asset('/img/FAQs.png') }}" alt="..."> </a>
            </div>
            <div class="card-body text-center"> 
                <h5 class="card-title"><a href="viewfaqs">Frequently Asked Questions</a></h5>
                <p class="fst-italic text-center">
                 If you still need to know more, then, visit our frequently asked questions or 
                 <a href="#">contact us</a> with your enquiry. 
                
                </p>
                <!--
                  <p class="fst-italic text-center">
                    <a href="viewfaqs">View FAQs</a>
                  </p>
                -->
            </div>
            </div>
          </div>

</div>

        </div>
      </div>
   

  </main><!-- End #main -->

  @endsection