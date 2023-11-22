

        
        <div class="container-fluid">
                        <div class="member3" >
                                {{$coursetype->type}}
                        </div>
        </div>

        <div class="container-fluid" data-aos="fade-up">
           
           <div class="row"> 
               <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="card-body">
                            <button  id="{{$coursetype->id}}-N1" class="dropbtn1" onclick="load_courses('{{$coursetype->id}}','N1')">Levels</button>
                            <button  id="{{$coursetype->id}}-N1" class="dropbtncourse" onclick="load_courses('{{$coursetype->id}}','N1')">N1</button>
                            <button  id="{{$coursetype->id}}-N2" class="dropbtncourse" onclick="load_courses('{{$coursetype->id}}','N2')">N2</button>
                            <button  id="{{$coursetype->id}}-N3" class="dropbtncourse" onclick="load_courses('{{$coursetype->id}}','N3')">N3</button>
                            <button  id="{{$coursetype->id}}-N4" class="dropbtncourse" onclick="load_courses('{{$coursetype->id}}','N4')">N4</button>
                            <button  id="{{$coursetype->id}}-N5" class="dropbtncourse" onclick="load_courses('{{$coursetype->id}}','N5')">N5</button>
                            <button  id="{{$coursetype->id}}-N6" class="dropbtncourse" onclick="load_courses('{{$coursetype->id}}','N6')">N6</button>
                        </div>
               </div>

               <div class="col-lg-5  align-items-stretch">
                    
                        <div class="subjects_div" id='subjects_div'>
                           
                        </div>
                     
                </div>

                <div class="col-lg-4  align-items-stretch">
                    <div class="card-body">
                    <button  class="dropbtn1" >Colleges</button>

                            @foreach($colleges as $college)
                                <button  class="dropbtncourse">{{$college->title}}</button>
                            @endforeach
                    </div>
                </div>
           </div>
         
       </div>
      
       

     </div>

     <script type="text/javascript">
        function load_courses(theCourseId,level){
          var finalUrl="showsubjects?coursetype="+theCourseId+"&level="+level
          $('#subjects_div').load(finalUrl)
        }
      </script>