@extends('layouts.master')

@section('content')


  <main id="main">
   <!-- ======= Breadcrumbs ======= -->
   <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
        <h2>About Us</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
<br><br><br>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <div class="member2" >
         Subscription
      </div>

      <div style="margin-top: 30px" data-aos="fade-up">

    <h2 style="color: #16537e;">Fill the form and submit it for the subscription</h2>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('viewsubscribe.store') }}" method="post" role="form"  enctype="multipart/form-data">
        @csrf
            <div class="row">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name">
                    @error('name')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="organisation" id="Organisation" 
                    placeholder="Organisation (None if not applicable)">
                    @error('organisation')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                    @error('email')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="numbers" class="form-control" name="number" id="number" placeholder="Your Number">
                    @error('numbers')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                </div>
                <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" >
                @error('subject')
                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" ></textarea>
                </div>
                <br><br>
            <div class="text-center"><button type="submit" class="btn btn-primary ml-3">Send Message</button></div>
        </form>
    
  </div>
    </div>
    
    </section><!-- End Contact Section -->

    

  </main><!-- End #main -->

  @endsection