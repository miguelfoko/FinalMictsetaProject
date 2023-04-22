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
<br><br><br>
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

      <div class="member2" >
      Community Education and Training Colleges
      </div>
      <div class="member2" >
      
      </div>
        <div class="row">
        
        @foreach ($communitycolleges as $communitycollege) 

        {!! $communitycollege->content !!}

        @endforeach
        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

 @endsection