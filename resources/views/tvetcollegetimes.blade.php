@extends('layouts.master')

@section('content')


  <main id="main" data-aos="fade-up">

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container-fluid" >
      <div class="member2" >
         Tvet College Times
        </div>
        </div>
        <div class="container" >
        <div class="row">

        @foreach ($tvetcollegetimes as $tctimes) 

        <div class="col-lg-3 col-md-6 ">
            <div class="box featured text-center">
              <h3>{{$tctimes->title}}</h3>
              <h5>{{$tctimes->volume}}</h5>
              <h5>{{$tctimes->publicationDate}}</h5>
              <h5>Size: {{$tctimes->size}} </h5>
              <div class="theSiteImages">
                <embed align="center" src="{{url('images')}}/{{$tctimes->coverPage}}" height="250" width="200">
              </div >
                <a href="{{url('files')}}/{{$tctimes->file}}" target="_blank" rel="noopener" class="btn-buy">Open Document</a>
             
            </div>
          </div>
        @endforeach
        </div>

      </div>
  
</section>
  </main><!-- End #main -->

  <script>
      jQuery('.btn-buy').click(function(){
        var pdf = jQuery(this).attr('data-pdfurl');
        jQuery('iframe #modal').attr('src', pdf);
      });
  </script>
 @endsection