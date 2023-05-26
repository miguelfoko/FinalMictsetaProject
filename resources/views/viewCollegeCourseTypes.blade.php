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
                @foreach ($coursetype as $ctype)
                    <table class="table table-bordered align-center">
                            <tr class="question">
                                <td>Course Type</td> 
                                <td width=80% >{!! $ctype->type !!}</td>
                            </tr>
                                <td class="mien">Description</td> 
                                <td >{!! $ctype->description !!}</td>
                            </tr >
                                <td class="mien"><b>Duration</b></td>  
                                <td >{!! $ctype->duration !!}</td>
                            </tr>
                                <td class="mien"><b>Qualification</b></td> 
                                <td >{!! $ctype->qualification !!}</td>
                            </tr>
                                <td class="mien"><b>Admission Requirements</b></td> 
                                <td >{!! $ctype->admissionRequirements !!}</td>
                            </tr>
                                <td class="mien"><b>Resources</b></td> 
                                <td >{!! $ctype->resources !!}</td>
                            </tr>
                    </table>
                   
                    @endforeach
                    <div class="noUseOfWysiwyg">* Please contact your nearest public TVET College for further details</div>
           
        {{ $coursetype->links() }}
      </div>
   

  </main><!-- End #main -->
  @endsection