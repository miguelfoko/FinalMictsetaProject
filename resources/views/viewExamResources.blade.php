@extends('layouts.master')

@section('content')


  <main id="main">
  
  <section id="pricing" class="pricing">
      <div class="container-fluid">
      <div class="member2" >
         Examination Resources
        </div>
        </div>
      
        <div class="container" data-aos="fade-up">
          <div class="new">
          <div class="row" data-aos="zoom-in" data-aos-delay="100">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
              <div class="card">
                <div class="card-body">
                  <button id="1" class="dropbtn" onclick="load_directory_content(1)" >Exam Entry Form <i class="fa fa-caret-right"></i></button> 
                  <button id="2" class="dropbtn" onclick="load_directory_content(2)">Examination Re-Marking <i class="fa fa-caret-right"></i></button> 
                  <button id="3" class="dropbtn" onclick="load_directory_content(3)">Examination Timetable <i class="fa fa-caret-right"></i></button> 
                  <button id="4" class="dropbtn" onclick="load_directory_content(4)">General Items <i class="fa fa-caret-right"></i></button> 
                  <button id="5" class="dropbtn" onclick="load_directory_content(5)">ICASS Support Documents <i class="fa fa-caret-right"></i></button> 
                  <button id="6" class="dropbtn" onclick="load_directory_content(6)">Management Action Planning<i class="fa fa-caret-right"></i></button> 
                  <button id="7" class="dropbtn" onclick="load_directory_content(7)">Validation Programmes <i class="fa fa-caret-right"></i></button> 
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
</section>
  </main><!-- End #main -->

 @endsection