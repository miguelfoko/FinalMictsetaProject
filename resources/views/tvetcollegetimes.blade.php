@extends('layouts.master')

@section('content')


  <main id="main" data-aos="fade-up">

    <!-- ======= Pricing Section ======= -->
  
      <div class="container-fluid" >
      <div class="member2" >
         Tvet College Times
        </div>
        <div class="row">

        @foreach ($tvetcollegetimes as $tctimes) 

        <div class="col-lg-3 col-md-6 ">
            <div class="box featured">
              <h3>{{$tctimes->title}}</h3>
              <h4>{{$tctimes->volume}}</h4>
              <h5>{{$tctimes->publicationDate}}</h5>
              <h5>Size: {{$tctimes->size}} </h5>
                <embed src="{{url('images')}}/{{$tctimes->coverPage}}" height="250" width="200">
              <div >
                <a href="{{url('files')}}/{{$tctimes->file}}" target="_blank" rel="noopener" class="btn-buy">Open Document</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
  

  </main><!-- End #main -->

 @endsection