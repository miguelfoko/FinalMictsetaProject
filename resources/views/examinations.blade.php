@extends('layouts.master')

@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">
        <h2>Courses</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div >
            <a href="viewexamresources">
               <img src="{{ asset('/img/ExamResources.png') }}" class="img-fluid" width= "200px" width= "200px" alt="">
            </a>
              <div class="member-content">
              <h4><a href="viewexamresources">View Resources</a></h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div >
            <a href="viewexamtrainingvideos">
               <img src="{{ asset('/img/ExamTrainingVideos.png') }}" class="img-fluid" width= "200px" width= "200px" alt="">
            </a>
              <div class="member-content">
              <h4><a href="viewexamtrainingvideos">View Videos</a></h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div >
            <a href="viewicasstrainingvideos">
               <img src="{{ asset('/img/ICASSTrainingVideos.png') }}" class="img-fluid" width= "200px" width= "200px" alt="">
            </a>
              <div class="member-content">
              <h4><a href="viewicasstrainingvideos">View Videos</a></h4>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
  
  @endsection