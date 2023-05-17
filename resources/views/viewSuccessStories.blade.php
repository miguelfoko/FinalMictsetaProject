@extends('layouts.master')

@section('content')


  <main id="main">

      <div class="container" data-aos="fade-up">
      <div class="member2" >
         Success Stories
        </div>
        <div class="row">
        @foreach ($successstories as $sstory) 

        <div class="col-lg-3 col-md-6 ">
            <div class="box featured">
              <h3>{{$sstory->title}}</h3>
                <embed src="{{url('images')}}/{{$sstory->coverPage}}" height="250" width="200">
              <div >
                <a href="{{url('files')}}/{{$sstory->file}}" target="_blank" rel="noopener" class="btn-buy">Open Document</a>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
   
  </main><!-- End #main -->

 @endsection