

        
        <div class="container-fluid">
                        <div class="member3" >
                                Courses
                        </div>
        </div>
         <div class="container" data-aos="fade-up">
           
            <div class="row"> 
               
                @foreach ($retCourse as $ctype)
                    <table class="table table-bordered align-center">
                       
                        <tr class="question">
                            <td>Course Type</td> 
                            <td width=80% >{!! $ctype->type !!}</td>
                        </tr>
                        <tr>
                            <td class="mien">Colleges</td> 
                            <td>
                                @foreach($ctype->colleges as $colleges)
                                    @foreach($regionallocations as $regionallocation)
                                        @if($regionallocation->id==$colleges)
                                            {{$regionallocation->region}};
                                        @endif
                                    @endforeach
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td class="mien">Description</td> 
                            <td >{!! $ctype->description !!}</td>
                        </tr >
                        <tr>
                            <td class="mien"><b>Duration</b></td>  
                            <td >{!! $ctype->duration !!}</td>
                        </tr>
                        <tr>
                            <td class="mien"><b>Qualification</b></td> 
                            <td >{!! $ctype->qualification !!}</td>
                        </tr>
                        <tr>
                            <td class="mien"><b>Admission Requirements</b></td> 
                            <td >{!! $ctype->admissionRequirements !!}</td>
                        </tr>
                        <tr>
                            <td class="mien"><b>Resources</b></td> 
                            <td >{!! $ctype->resources !!}</td>
                        </tr>
                    </table>
                        
                @endforeach
                <div class="noUseOfWysiwyg">* Please contact your nearest public TVET College for further details</div>
            </div>
          
        </div>
       
        

      </div>

