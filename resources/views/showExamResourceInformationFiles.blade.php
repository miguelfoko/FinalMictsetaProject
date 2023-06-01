

        <div class="container-fluid">
                <div class="member3" >
                        {{$category}}
                </div>
        </div>
        <div class="container" data-aos="fade-up">
       

        
        <div class="row">

            @foreach ($examresources as $examresource)
            <div class="col-lg-3">
            <div class="box featured text-center">
               
                    <!--
                            <embed src="{{url('files/Exam_Entry_Form')}}/{{$examresource->file}}#page=1" type="application/pdf" height="150" width="100">
--> 
                        @switch($cat)
                                @case(1)
                                        <h5>{{$examresource->name}} </h5>
                                        <div class="theSiteFM">
                                                <embed src="{{url('files/Exam_Entry_Form')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                        </div>
                                                <a href="{{url('files/Exam_Entry_Form')}}/{{$examresource->file}}" target="_blank" rel="noopener">Download</a>
                                        @break
                                @case(2)
                                        <h5>{{$examresource->name}} </h5>
                                        <div class="theSiteFM">
                                                <embed src="{{url('files/Examination_Re_Marking')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                        </div>
                                        <a href="{{url('files/Examination_Re_Marking')}}/{{$examresource->file}}" target="_blank" rel="noopener">Download</a>
                                        @break          
                                @case(3)
                                        <h5>{{$examresource->name}} </h5>
                                        <div class="theSiteFM">
                                                <embed src="{{url('files/Examination_Time_table')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                        </div>
                                        <a href="{{url('files/Examination_Time_table')}}/{{$examresource->file}}" target="_blank" rel="noopener">Download</a>
                                        @break
                                @case(4)
                                        <h5>{{$examresource->name}} </h5>
                                        <div class="theSiteFM">
                                                <embed src="{{url('files/General_Items')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                        </div>
                                        <a href="{{url('files/General_Items')}}/{{$examresource->file}}" target="_blank" rel="noopener">Download</a>
                                        @break
                                @case(5)
                                        <h5>{{$examresource->name}} </h5>
                                        <div class="theSiteFM">
                                                <embed src="{{url('files/Icass_Support_Documents')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                        </div>
                                        <a href="{{url('files/Icass_Support_Documents')}}/{{$examresource->file}}" target="_blank" rel="noopener">Download</a>
                                        @break
                                @case(6)
                                        <h5>{{$examresource->name}} </h5>
                                        <div class="theSiteFM">
                                                <embed src="{{url('files/Management_Action_Planning')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                        </div>
                                        <a href="{{url('files/Management_Action_Planning')}}/{{$examresource->file}}" target="_blank" rel="noopener">Download</a>
                                        @break
                                @case(7)
                                        <h5>{{$examresource->name}} </h5>
                                        <div class="theSiteFM">
                                                <embed src="{{url('files/Validation_Programmes')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                        </div>
                                        <a href="{{url('files/Validation_Programmes')}}/{{$examresource->file}}" target="_blank" rel="noopener">Download</a>
                                        @break
                        @endswitch
                        </div>
                </div>
                @endforeach
          
          </div>
       
        

      </div>

