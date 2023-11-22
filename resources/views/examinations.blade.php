@extends('layouts.master')

@section('content')

<?php
    $text1="This section provides access to a range of information and resources such as:
      <ul>
        <li>Examination Entry forms</li>
        <li>Examination Timetables</li>
        <li>Examination Re-marking or Re-Checking Requests</li>
        <li>Management Action Plans</li>
        <li>Validation Programmes</li>
      </ul>";
    $text1 = strlen($text1) > 220 ? substr($text1, 0, 220) : $text1;
    $text2="This section provides comprehensive training material for all those involved 
    in preparing, invigilating and managing of examinations at their college. </p> <p class=\"fst-italic text-center\">
    Videos may be watched directly on the website or downloaded for offline use as needed.";
    $text2 = strlen($text2) > 248 ? substr($text2, 0, 248) : $text2;

    $text3="This section provides comprehensive training material for all those involved 
    in setting, moderating and managing of Internal Continuous Assesments (ICASS) at their college.
  </p> <p class=\"fst-italic text-center\">
    Videos may be watched directly on the website or downloaded for offline use as needed.";
    $text3 = strlen($text3) > 248 ? substr($text3, 0, 248) : $text3;
   

 ?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Courses Section ======= -->
    
    <section id="events" class="events">
   
      <div class="container-fluid" data-aos="fade-up">
          <div class="member2" >
           Examinations
          </div>
      </div>
      <div class="container" data-aos="fade-up">
          <div class="new">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4" align="center">
              <div class="card">
            
              <div class="card-img">
                  <a href="viewexamresources"><img src="{{ asset('/img/ExamResources.png') }}" align="center" alt="..."></a>
              </div>
              <div class="card-body">
                  <h5 class="card-title text-center"><a href="viewexamresources">Examination Information and Resources</a></h5>
                  <p class="fst-italic text-center">
                    {!! $text1 !!}
                  </p>
               
                   
           
              </div>
              <p class="fst-italic text-center">
                      <a href="viewexamresources">View Ressources</a>
              </p>
              </div>
            </div>

            <div class="col-lg-4 " align="center">
              <div class="card">
            
              <div class="card-img">
                  <a href="viewexamtrainingvideos"><img src="{{ asset('/img/ExamTrainingVideos.png') }}" align="center" alt="..."></a>
              </div>
              <div class="card-body">
                  <h5 class="card-title  text-center" ><a href="viewexamtrainingvideos">Examination Training Videos</a></h5>
                  <p class="fst-italic text-center">
                  {!! $text2 !!}
                  </p>
                 
              </div>
              
              <p class="fst-italic text-center">
                      <a href="viewexamtrainingvideos">View Videos</a>
              </p>
                 
              </div>
            </div>


            <div class="col-lg-4" align="center">
              <div class="card">
            
                <div class="card-img">
                    <a href="viewicasstrainingvideos"><img src="{{ asset('/img/ICASSTrainingVideos.png') }}" align="center" alt="..."></a>
                </div>
                <div class="card-body">
                    <h5 class="card-title  text-center"><a href="viewicasstrainingvideos">ICASS Training Videos</a></h5>
                    <p class="fst-italic text-center">
                    {!! $text3 !!}
                    </p>
                           
                </div>
                <p class="fst-italic text-center">
                        <a href="viewicasstrainingvideos">View Videos</a>
                </p>
              </div>
            </div>

          </div>
    </diV>
      </div>
   
      </section>
  </main><!-- End #main -->
  
  @endsection