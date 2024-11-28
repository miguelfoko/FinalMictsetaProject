<!-- Our Blog Wrapper End -->
<h4 class="dropbtn1" >{{$category}}</h4>

<div class="our-blog-wrapper">
  <div class="container">
  <div class="new">
    <div class="row">  
    @foreach ($examresources as $examresource)
          <div class="col-sm-12 col-lg-4">
            <div class="single-blog">
                @switch($cat)
                        @case(1)
                                <h5><a href="{{url('files/Exam_Entry_Form')}}/{{$examresource->file}}" target="_blank" rel="noopener">{{$examresource->name}}</a> </h5>
                              <!--   <div class="theSiteFM">
                                       <embed src="{{url('files/Exam_Entry_Form')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                        
                                </div>
                                  -->      
                                @break
                        @case(2)
                                <h5><a href="{{url('files/Examination_Re_Marking')}}/{{$examresource->file}}" target="_blank" rel="noopener">{{$examresource->name}}</a> </h5>
                                <!--<div class="theSiteFM">
                                        <embed src="{{url('files/Examination_Re_Marking')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">-->
                                </div>
                                -->
                                @break          
                        @case(3)
                                <h5><a href="{{url('files/Examination_Time_table')}}/{{$examresource->file}}" target="_blank" rel="noopener">{{$examresource->name}}</a> </h5>
                                <!--<div class="theSiteFM">
                                        <embed src="{{url('files/Examination_Time_table')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                </div>
                                -->
                                
                                @break
                        @case(4)
                                <h5><a href="{{url('files/General_Items')}}/{{$examresource->file}}" target="_blank" rel="noopener">{{$examresource->name}}</a> </h5>
                                <!--<div class="theSiteFM">
                                        <embed src="{{url('files/General_Items')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                </div>
                                -->
                                
                                @break
                        @case(5)
                                <h5><a href="{{url('files/Icass_Support_Documents')}}/{{$examresource->file}}" target="_blank" rel="noopener">{{$examresource->name}}</a> </h5>
                               <!--<div class="theSiteFM">
                                        <embed src="{{url('files/Icass_Support_Documents')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                </div>
                                -->
                                
                                @break
                        @case(6)
                                <h5><a href="{{url('files/Management_Action_Planning')}}/{{$examresource->file}}" target="_blank" rel="noopener">{{$examresource->name}}</a> </h5>
                                <!--<div class="theSiteFM">
                                        <embed src="{{url('files/Management_Action_Planning')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                </div>
                                -->
                                
                                @break
                        @case(7)
                                <h5><a href="{{url('files/Validation_Programmes')}}/{{$examresource->file}}" target="_blank" rel="noopener">{{$examresource->name}}</a> </h5>
                                <!--<div class="theSiteFM">
                                        <embed src="{{url('files/Validation_Programmes')}}/{{$examresource->file}}" type="application/pdf" height="250" width="200">
                                </div>
                                -->
                                
                                @break
                @endswitch
          </div>
      
    </div>
    @endforeach
    </div>
  </div>
</div>
<!-- Our Blog Wrapper End --> 


