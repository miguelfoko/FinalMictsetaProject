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

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
<br><br><br><br>
    
  <div class="container" data-aos="fade-up">
      <div class="member2" >
         Get In Touch
        </div>
    <div class="row mt-5">
      <div class="col-lg-8 mt-5 mt-lg-0">
      
        <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3593.620791887777!2d28.182159050197072!3d-25.75005105183569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e95621316c8cff5%3A0x4f0e47ffe42e447a!2s123%20Francis%20Baard%20St%2C%20Pretoria%20Central%2C%20Pretoria%2C%200002!5e0!3m2!1sen!2sza!4v1679554249199!5m2!1sen!2sza" width="100" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen></iframe>
      

      </div>

      <div class="col-lg-4">

        <div class="info">
          <div class="address">
            <i class="bi bi-geo-alt"></i>
            <h4>Visit Us:</h4>
            <p>123 Francis Baard Street, Pretoria</p>
          </div>

          <div class="email">
            <i class="bi bi-envelope"></i>
            <h4>Email:</h4>
            <p>TVET@dhet.gov.za</p>
          </div>

          <div class="phone">
            <i class="bi bi-phone"></i>
            <h4>Call:</h4>
            <p>0642268214</p>
          </div>

          <div style="margin-top: 20px;" class="operations">
            <i class="bi bi-house"></i>
            <h4>We're open:</h4>
            <p>Monday: 08h00 - 16h00</p>
            <p>Tuesday: 08h00 - 16h00</p>
            <p>Wednesday: 08h00 - 16h00</p>
            <p>Thursday: 08h00 - 16h00</p>
            <p>Friday: 08h00 - 13h00</p>
            <p>Closed on Saturday, Sunday and Public Holidays</p>
            
          </div>
        

        </div>

      </div>
   
   <div style="margin-top: 30px" data-aos="fade-up">

    <h2 style="color: #16537e;">Questions or Comments? Let us know how we can help you.</h2>

        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
                <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="Organisation" id="Organisation" placeholder="Organisation (if applicable)" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="numbers" class="form-control" name="number" id="number" placeholder="Your Number" required>
                </div>
                </div>
                <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                </div>
                <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
        </form>
    
  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

  @endsection