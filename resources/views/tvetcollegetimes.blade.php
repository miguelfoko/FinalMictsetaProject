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

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

        @foreach ($tvetcollegetimes as $tctimes) 

        <div class="col-lg-3 col-md-6 ">
            <div class="box featured">
              <h3>{{$tctimes->title}}</h3>
              <h4>{{$tctimes->volume}}</h4>
              <h5>{{$tctimes->publicationDate}}</h5>
              <h5>Size: {{$tctimes->size}} </h5>
                <embed src="{{url('files')}}/{{$tctimes->file}}" height="250" width="200">
              <div >
                <a href="{{url('files')}}/{{$tctimes->file}}" class="btn-buy">Download</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

 @endsection