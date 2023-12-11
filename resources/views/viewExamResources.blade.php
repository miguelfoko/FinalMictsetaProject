@extends('layouts.master')

@section('content')


<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1> Examination Resources</h1>
  </div>
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
    <div class="container">
        
            <div class="row">
                <div class="col-12">
                    <div class="single_courses course-list"> 
                    <!-- Single Courses Image Area -->
                        <div class="single_courses_thumb">
                            <div class="card">
                                        <div class="card-title">
                                            <h4 class="dropbtn1" >Options</h4>
                                        </div>
                                        <div class="card-body">
                                          <h6 id="1" class="dropbtn" onclick="load_directory_content(1)" >Exam Entry Form <i class="fa fa-caret-right"></i></h6> 
                                          <h6 id="2" class="dropbtn" onclick="load_directory_content(2)">Examination Re-Marking <i class="fa fa-caret-right"></i></h6> 
                                          <h6 id="3" class="dropbtn" onclick="load_directory_content(3)">Examination Timetable <i class="fa fa-caret-right"></i></h6> 
                                          <h6 id="4" class="dropbtn" onclick="load_directory_content(4)">General Items <i class="fa fa-caret-right"></i></h6> 
                                          <h6 id="5" class="dropbtn" onclick="load_directory_content(5)">ICASS Support Documents <i class="fa fa-caret-right"></i></h6> 
                                          <h6 id="6" class="dropbtn" onclick="load_directory_content(6)">Management Action Planning<i class="fa fa-caret-right"></i></h6> 
                                          <h6 id="7" class="dropbtn" onclick="load_directory_content(7)">Validation Programmes <i class="fa fa-caret-right"></i></h6> 
                                        </div>
                            </div>
                        </div>
                        <!-- Single Courses Description Area -->
                        
                          <div class="single_courses_desc" id='directory_content_div'>
                                      <p class="levels_div" id='levels_div'>  </p>         
                          </div>
                       
                            
                    </div>
                </div>
            </div>
        
    </div>
</div>
<!-- Inner Page Wrapper End --> 

      <script type="text/javascript">
        function load_directory_content(theId){
          var finalUrl="showexaminformationresources?cat="+theId
          $('#directory_content_div').load(finalUrl)
        }
      </script>


 @endsection