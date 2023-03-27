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
      <div class="container">
          <div class="row">
              <div class="col-md-12" id="fm-main-block">
                  <div id="fm"></div>
              </div>
          </div>
      </div>

      <!-- File manager -->
    <script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('fm-main-block').setAttribute('style', 'height:' + window.innerHeight + 'px');
  
        fm.$store.commit('fm/setFileCallBack', function(fileUrl) {
          window.opener.fmSetLink(fileUrl);
          window.close();
        });
      });
    </script>
    

      <div class="container" data-aos="fade-up">

        <div class="row">
        Exam Resources
        @foreach ($examresources as $examresource) 

        <div class="col-lg-3 col-md-6 ">
            <div class="box featured">
              <h3>{{$examresource}}</h3>
              
                <!--<embed src="{{url('images')}}/{{$ccalendar->coverPage}}" height="250" width="200">-->
              <div >
                <!--<a href="{{url('files')}}/{{$ccalendar->file}}" target="_blank" rel="noopener" class="btn-buy">Open Document</a>-->
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

 @endsection