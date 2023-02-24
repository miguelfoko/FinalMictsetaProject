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
      
      <div class="container" data-aos="fade-up">

        <div class="row mt-5">
        <form action="{{url('insertInternalStakeHolder')}}" method="post" role="form" >
        @csrf
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <h4>Name:</h4> <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="address">
                <h4>Surname:</h4> <input type="text" name="surname" class="form-control" id="surname" placeholder="Your Surname" required>
              </div>
              <div class="email">
                <h4>Email:</h4> <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="email">
                <h4>Password:</h4> <input type="password" class="form-control" name="password" id="password" placeholder="Your Password" required>
              </div>
              <div class="text-center"><button type="submit">Register</button></div>
            </form>
            @if(session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
            @endif
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection