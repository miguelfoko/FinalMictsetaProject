@extends('layouts.master')

@section('content')

  <main id="main" data-aos="fade-in">


   
        <div class="container-fluid" data-aos="fade-up">
            <div class="member2" >
                College Course Type
            </div>
            <div class="noUseOfWysiwyg">
                @foreach ($collegecoursetype as $cctype) 
                    <h3>Overview </h3>
                    
                        {!! $cctype->overview !!}
                
                    <br>
                    
                    <h3>Industry  Fields </h3>
                    {!! $cctype->industryFields !!}

                    <br>
                    
                    <h3>Types of courses </h3>
                    {!! $cctype->typeOfCourses !!}
                @endforeach
            </div>
        </div>
    <section id="pricing" class="pricing">
        
        <div class="container-fluid" data-aos="fade-up">
            <div class="new">
                <div class="row" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-body">
                                @foreach ($programs as $program)
                                    <button id="{{$program->id}}" class="dropbtn" onclick="load_colleges('{{$program->id}}')" >{{$program->title}}<i class="fa fa-caret-right"></i></button> 
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-8  align-items-stretch">
                        <div class="card">
                            <div class="colleges_div" id='colleges_div'></div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>

    </section>                 
   

      <script type="text/javascript">
        function load_colleges(theProgramTitle){
          var finalUrl="showcolleges?program="+theProgramTitle
          $('#colleges_div').load(finalUrl)
        }
      </script>

  </main><!-- End #main -->
  @endsection