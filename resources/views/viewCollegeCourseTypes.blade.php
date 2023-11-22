@extends('layouts.master')

@section('content')

  <main id="main" data-aos="fade-in">


   
        <div class="container-fluid" data-aos="fade-up">
            <div class="member2" >
                College Course Type
            </div>
            <div class="noUseOfWysiwyg">
                @foreach ($collegecoursetype as $cctype) 
                    <h4>Overview </h4>
                    
                        {!! $cctype->overview !!}
                
                    <br>
                    
                    <h4>Industry  Fields </h4>
                    {!! $cctype->industryFields !!}

                    <br>
                    
                    <h4>Types of courses </h4>
                    {!! $cctype->typeOfCourses !!}
                @endforeach
            </div>
        </div>
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