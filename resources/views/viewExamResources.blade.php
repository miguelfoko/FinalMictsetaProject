@extends('layouts.master')

@section('content')


<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapperExaminationResources">
  <div class="breadcromb-overlay"></div>
 <!-- <div class="container">
    <h1> Examination Resources</h1>
  </div>-->
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/examinations">Examinations</a></li>
      <li> Examination Resources</li>
    </ul>
  </div>
</div>


 <!-- Inner Page Wrapper Start -->
 <div class="inner-page-wrapper course-wrapper">
 <div class="container" data-aos="fade-up">
          <div class="new">
              <div class="row" data-aos="zoom-in" data-aos-delay="100">

                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                      <div class="card">
                        <div class="card-body">
                          <a id="1" href="#directory_content_div" class="dropbtn" onclick="load_directory_content(1)" >Exam Entry Form <i class="fa fa-caret-right"></i></a> <br>
                          <a id="2" href="#directory_content_div" class="dropbtn" onclick="load_directory_content(2)">Examination Re-Marking <i class="fa fa-caret-right"></i></a> <br>
                          <a id="3" href="#directory_content_div" class="dropbtn" onclick="load_directory_content(3)">Examination Timetable <i class="fa fa-caret-right"></i></a> <br>
                          <a id="4" href="#directory_content_div" class="dropbtn" onclick="load_directory_content(4)">General Items <i class="fa fa-caret-right"></i></a> <br>
                          <a id="5" href="#directory_content_div" class="dropbtn" onclick="load_directory_content(5)">ICASS Support Documents <i class="fa fa-caret-right"></i></a> <br>
                          <a id="6" href="#directory_content_div" class="dropbtn" onclick="load_directory_content(6)">Management Action Planning<i class="fa fa-caret-right"></i></a> <br>
                          <a id="7" href="#directory_content_div" class="dropbtn" onclick="load_directory_content(7)">Validation Programmes <i class="fa fa-caret-right"></i></a> 
                        </div>
                      </div>
                  </div>

                  <div class="col-lg-8  align-items-stretch">
                      <div class="card">
                        <div class="directory_content_div" id='directory_content_div'>
                          
                        </div>
                      </div>
                  </div>

              </div>
        </diV>
      </div>

  

      <script type="text/javascript">
        function load_directory_content(theId){
          var finalUrl="showexaminformationresources?cat="+theId
          $('#directory_content_div').load(finalUrl)
        }
      </script>
</div>
<!-- Inner Page Wrapper End --> 


 @endsection