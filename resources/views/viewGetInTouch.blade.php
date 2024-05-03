@extends('layouts.master')

@section('content')

<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>Get In Touch</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/contactus">Contact us</a></li>
      <li>Get In Touch</li>
    </ul>
  </div>
</div>

<!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper contact-wrapper">
  <div class="contact-info-main">
        <div class="alert alert-success mb-1 mt-1">
        @if( isset($status) ) 
          {{$status}}
        @endif
            
        </div> 
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h4>Question or comments? Let us know how we can help you.</h4>
          </div>
          <div class="contact-form-box">
            <form id="contactForm" class="contact-form" action="/email" role="form"  enctype="multipart/form-data" method="POST">
              @csrf
              <div class="row">
                <div class="col-12 col-sm-12">
                  <input class="medium-input" maxlength="50" placeholder="Name *" required id="name" name="name" type="text">
                </div>
                <div class="col-12 col-sm-12">
                  <input class="medium-input" maxlength="50" placeholder="Organisation/Company" required id="organisation" name="organisation" type="text">
                </div>
                <div class="col-12 col-sm-6">
                  <input class="medium-input" maxlength="70" placeholder="E-mail *" required id="email" name="email" type="email">
                </div>
                <div class="col-12 col-sm-6 ">
                  <input class="medium-input" maxlength="70" placeholder="Subject *" required id="subject" name="subject" type="text">
                </div>
                <div class="col-12 col-sm-12">
                  <textarea class="medium-textarea" rows="12" maxlength="1000" placeholder="Message *" required id="message" name="message"></textarea>
                </div>
                <div class="col-12 col-sm-12">
                  <button type="submit" class="btn"><span>Send Message</span></button>
                </div>
              </div>
            </form>
          </div>
      </div>
        <div class="col-lg-6">
            <div class="contact-info-box">
              <div class="row">
                <div class="col-12">
                  <div class="contact-info-section no-space">
                    <h4>Get in Touch</h4>
                    <p> If you have questions or comments or need assistance, please let us know. To contact us, fill in 
                      the necessary information bellow and we'll get back to you as soon as we can. Please ensure that your email address
                    is accurate or you will not receive response</p>
                  </div>
                </div>
                <div class="col-12">
                  <div class="contact-info-section">
                    <h4>The Office</h4>
                    <ul class="list-style-1">
                      <li>
                        <p><i class="fa fa-map-marker text-center"></i> <strong>Address:</strong> 123 Francis Baard Street, Pretoria</p>
                      </li>
                      <li>
                        <p><i class="fa fa-phone text-center"></i> <strong>Phone:</strong> (+27) 0642268214</p>
                      </li>
                      <li>
                        <p><i class="fa fa-envelope text-center"></i> <strong>Email:</strong> <a href="javascript:void(0)">TVET@dhet.gov.za</a></p>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-12">
                    <div class="contact-info-section border-none">
                      <h4>Business Hours</h4>
                      <ul class="list-style-2">
                        <li>Monday: 08h00 - 16h00</li>
                        <li>Tuesday: 08h00 - 16h00</li>
                        <li>Wednesday: 08h00 - 16h00</li>
                        <li>Thursday: 08h00 - 16h00</li>
                        <li>Friday: 08h00 - 13h00</li>
                        <li>Closed on Saturday, Sunday and Public Holidays</li>
                      </ul>
                    </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>

</div>

<!-- Inner Page Wrapper End -->

  @endsection