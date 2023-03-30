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

    <section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
        @foreach ($faqs as $faq) 

        <div class="col-lg-8 col-md-6 ">
            <div >
              <h3>{{$faq->title}}</h3>
                
              <div >
              {!! $faq->content !!}           
            </div>
          </div>
        @endforeach
        </div>

      </div>

  </main><!-- End #main -->

 @endsection