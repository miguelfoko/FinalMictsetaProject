@extends('layouts.master')

@section('content')


<!-- Breadcromb Area Start -->
<div class="breadcromb-wrapper">
  <div class="breadcromb-overlay"></div>
  <div class="container">
    <h1>College Course Type</h1>
  </div>
</div>

<div class="breadcromb-text">
  <div class="container">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/resources">Resources</a></li>
      <li>College Course Type</li>
    </ul>
  </div>
</div>


<div class="inner-page-wrapper course-wrapper course-details">
      <div class="container">
      @foreach ($collegecoursetype as $cctype) 
          <div class="row">
            <div class="courses_overview">
              <h5>Overview</h5>
            </div>
            <!-- Courses Overview Content --> 
            <div class="couress_overview_content">
              <p>{!! $cctype->overview !!} </p>
            </div>

            <div class="courses_overview">
              <h5>Industry  Fields</h5>
            </div>
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p>{!! $cctype->industryFields !!} </p>
            </div>

            <div class="courses_overview">
              <h5>Types of courses</h5>
            </div>
            <!-- Courses Overview Content -->
            <div class="couress_overview_content">
              <p> {!! $cctype->typeOfCourses !!}</p>
            </div>


          </div>
        @endforeach 
        
      </div>
    </div>


    <!-- Inner Page Wrapper Start -->
<div class="inner-page-wrapper course-wrapper">
    <div class="container">
        
            <div class="row">
                @foreach ($programs as $program)

                <div class="col-12">
                    <div class="single_courses course-list"> 
                    <!-- Single Courses Image Area -->
                        <div class="single_courses_thumb">
                            <div class="card">
                                        <div class="card-title">
                                            <h4 id="{{$program->id}}" class="dropbtn1" >{{$program->title}}</h4>
                                        </div>
                                        <div class="card-body">
                                            @foreach($coursetypes as $coursetype) 
                                                @if($coursetype->idprogram==$program->id)
                                                <h6 id="{{$coursetype->id}}" class="dropbtncourse" 
                                                    onclick="load_levels('{{$coursetype->id}}','{{$program->id}}')">{{$coursetype->type }}
                                                    <a href="#levels_div"> 
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </h6>  
                                                @endif 
                                            @endforeach
                                        </div>
                            </div>
                        </div>
                        <!-- Single Courses Description Area -->
                        <div class="single_courses_desc" id="single_courses_desc">
                                    <p class="levels_div" id='levels_div'>  </p>         
                        </div>
                            
                    </div>
                </div>
                @endforeach
            </div>
        
    </div>
</div>
<!-- Inner Page Wrapper End --> 



  <main id="main" data-aos="fade-in">

    <section id="pricing" class="pricing">
        
        <div class="container-fluid" data-aos="fade-up"> 
            <div class="new">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                @foreach ($programs as $program)
                                    <button id="{{$program->id}}" class="dropbtn1" >{{$program->title}}</button> 
                                    @foreach($coursetypes as $coursetype) 
                                        @if($coursetype->idprogram==$program->id)
                                        <button  id="{{$coursetype->id}}" class="dropbtncourse" onclick="load_levels('{{$coursetype->id}}','{{$program->id}}')">{{$coursetype->type }}</button>
                                            
                                        @endif 
                                    @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-7  align-items-stretch">
                        <div class="card">
                            <div class="levels_div" id='levels_div'></div>
                        </div>
                    </div>
<!--
                    <div class="col-lg-7  align-items-stretch">
                        <div class="card">
                            <div class="colleges_div" id='colleges_div'></div>
                        </div>
                    </div>
-->
                </div> 
            </div>
        </div>

    </section>                 
   

      <script type="text/javascript">
        function load_colleges(theProgramTitle){
          var finalUrl="showcolleges?program="+theProgramTitle
          $('#colleges_div').load(finalUrl)
        } 

        function load_levels(coursetypeId,programId){
          var finalUrl="showcolleges?coursetype="+coursetypeId+"&program="+programId
          $('#levels_div').load(finalUrl)
        }
      </script>


  </main><!-- End #main -->
  @endsection