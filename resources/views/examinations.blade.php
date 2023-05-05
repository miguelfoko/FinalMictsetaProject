@extends('layouts.master')

@section('content')

  <main id="main" data-aos="fade-in">

    <!-- ======= Courses Section ======= -->
    <section id="events" class="events">
    <br><br>
      <div class="container" data-aos="fade-up">
      <div class="member2" >
         Examination
        </div>
        <div class="row" data-aos="zoom-in" data-aos-delay="100">

         <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
                <a href="viewexamresources"><img src="{{ asset('/img/ExamResources.png') }}" alt="..."></a>
            </div>
            <div class="card-body">
                <h5 class="card-title"><a href="viewexamresources">Examination Information and Resources</a></h5>
                <p class="fst-italic text-center">This section provides access to a range of information and resources such as:
                  <ul>
                    <li>Examination Entry forms</li>
                    <li>Examination Timetables</li>
                    <li>Examination Re-marking or Re-Checking Requests</li>
                    <li>Management Action Plans</li>
                    <li>Validation Programmes</li>
                  </ul>
                </p>
                <p class="fst-italic text-center">
                <a href="viewexamresources">View Ressources</a></p>
            </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
                <a href="viewexamtrainingvideos"><img src="{{ asset('/img/ExamTrainingVideos.png') }}" alt="..."></a>
            </div>
            <div class="card-body">
                <h5 class="card-title"><a href="viewexamtrainingvideos">Examination Training Videos</a></h5>
                <p class="fst-italic text-center">This section provides comprehensive training material for all those involved 
                  in preparing, invigilating and managing of examinations at their college.
                </p>

                <p class="fst-italic text-center">
                  Videos may be watched directly on the website or downloaded for offline use as needed.
                </p>

                <p class="fst-italic text-center">
                <a href="viewexamtrainingvideos">View Videos</a></p>
            </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="card">
           
            <div class="card-img">
                <a href="viewicasstrainingvideos"><img src="{{ asset('/img/ICASSTrainingVideos.png') }}" alt="..."></a>
            </div>
            <div class="card-body">
                <h5 class="card-title"><a href="viewicasstrainingvideos">ICASS Training Videos</a></h5>
                <p class="fst-italic text-center">This section provides comprehensive training material for all those involved 
                  in setting, moderating and managing of Internal Continuous Assesments (ICASS) at their college.
                </p>

                <p class="fst-italic text-center">
                  Videos may be watched directly on the website or downloaded for offline use as needed.
                </p>

                <p class="fst-italic text-center">
                <a href="viewicasstrainingvideos">View Videos</a></p>
            </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Courses Section -->

  </main><!-- End #main -->
  
  @endsection