<!-- Pre Loader -->
<div id="dvLoading"></div>
<!-- Header Start -->
<header class="header-area"> 
  <!-- Header Top Area Start -->
  <div class="header-top-area bg-dark-1 d-none d-sm-block">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 col-md-6">
          <div class="header-msg"><span>Welcome To <span>Colleges and SETA Times</span></span></div>
        </div>
        <div class="col-lg-6 col-sm-6 col-md-6"> 
          <div class="header-links"> 
            <a href="#"><i class="fa fa-facebook"></i></a> 
            <a href="#"><i class="fa fa-youtube"></i></a> 
            
          </div> 
        </div>
      </div>
    </div>
  </div>
  
   <!-- Logo Area Start --> 
  <div class="logo-info-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-4 col-9">
          <div class="logo"> <a href="/"><img src="{{ asset('/img/TVET/Header1.jpg') }}" alt="DHET" data-popupalt-original-title="null" title="DHET" style="width: 100%; height:auto;" ></a> </div>
        </div>
       
      </div>
    </div>
  </div>
  
   <!-- Main Menu Area Start -->
   <div class="mainmenu-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 d-none d-lg-block">
          <div class="main-menu-area bg-dark-1"> 
            <nav>
              <ul>
                <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/"  >Home</a></li>
                <li class="{{ (request()->is('aboutus')||request()->is('abouttvet')
                    ||request()->is('viewcommunitycolleges')
                    ||request()->is('publicTvetCollege')
                    ||request()->is('privateTvetCollege')
                    ||request()->is('viewsetas')) ? 'active' : '' }}"><a href="/aboutus" >About Us <i class="fa fa-angle-down"></i> </a>
                  <ul class="dropdown_menu">
                    <li><a href="abouttvet">TVET Colleges</a></li>
                    <li><a href="viewcommunitycolleges">Community Colleges</a></li>
                    <li><a href="viewsetas">SETAs</a></li>
                  </ul>  
                </li>
                <li class="{{ (request()->is('examinations')
                    ||request()->is('viewexamresources')
                    ||request()->is('viewexamtrainingvideos')
                    ||request()->is('viewicasstrainingvideos')) ? 'active' : '' }}"><a href="/examinations" >Examinations<i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown_menu">
                    <li><a href="viewexamresources">Examination Information and Resources</a></li>
                    <li><a href="viewexamtrainingvideos">Examination Training Videos</a></li>
                    <li><a href="viewicasstrainingvideos">ICASS Training Videos</a></li>
                  </ul>
                </li>
                <li class="{{ (request()->is('resources')
                    ||request()->is('viewcollegecoursetype')
                    ||request()->is('viewsuccessstories') 
                    ||request()->is('viewcollegecalendar')
                    ||request()->is('viewcareerguidance')) ? 'active' : '' }}"><a href="/resources" >Resources <i class="fa fa-angle-down"></i> </a>
                  <ul class="dropdown_menu">
                    <li><a href="viewcollegecoursetype">College Course Type</a></li>
                    <li><a href="viewcollegecalendar">College Calendar</a></li>
                    <li><a href="viewcareerguidance">Career Guidance</a></li>
                    <li><a href="viewsuccessstories">Success Stories</a></li>
                  </ul>  
                </li>
                <li class="{{ (request()->is('viewNews')||request()->is('viewNews/*')) ? 'active' : '' }}"><a href="/viewNews" >News </a></li>
                <li class="{{ (request()->is('tvetcollegetimes')) ? 'active' : '' }}"><a href="/tvetcollegetimes" >TVET College Times </a></li>
                <li class="{{ (request()->is('contactus')
                    ||request()->is('viewgetintouch')
                    ||request()->is('viewregionallocations')
                    ||request()->is('viewfaqs')) ? 'active' : '' }}"><a href="/contactus" >Contact Us <i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown_menu">
                    <li><a href="viewgetintouch">Contact Details</a></li>
                    <li><a href="viewregionallocations">Regional Locations</a></li>
                    <li><a href="viewfaqs">Frequenly Asked Questions</a></li>
                  </ul>  
                </li> 
              </ul>
            </nav>
            <div class="search-form">
              <form method="post" action="contact-us.html">
                <div class="form-group clearfix">
                  <input name="email" value="" placeholder="Search" required type="email">
                  <button type="submit" class="theme-btn subscribe-btn"><span class="fa fa-search"></span></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 d-block d-lg-none">  
          <!-- Mobile Menu Area Start -->
          <div class="mobile-menu-area">
            <div class="mobile-menu">
              <nav id="mobile-menu-active">
                <ul>
                  <li class="{{ (request()->is('/')) ? 'active' : '' }}"><a href="/"  >Home</a></li>
                  <li class="{{ (request()->is('aboutus')||request()->is('abouttvet')
                    ||request()->is('viewcommunitycolleges')
                    ||request()->is('publicTvetCollege')
                    ||request()->is('privateTvetCollege')
                    ||request()->is('viewsetas')) ? 'active' : '' }}"><a href="/aboutus" >About Us</a>
                  <ul class="dropdown_menu">
                    <li><a href="abouttvet">TVET Colleges</a></li>
                    <li><a href="viewcommunitycolleges">Community Colleges</a></li>
                    <li><a href="viewsetas">SETAs</a></li>
                  </ul>
                </li>
                  <li class="{{ (request()->is('examinations')
                    ||request()->is('viewexamresources')
                    ||request()->is('viewexamtrainingvideos')
                    ||request()->is('viewicasstrainingvideos')) ? 'active' : '' }}"><a href="/examinations" >Examinations</a>
                    <ul class="dropdown_menu">
                      <li><a href="course-grid.html">Course Grid</a></li>
                      <li><a href="course-list.html">Course List</a></li>
                      <li><a href="course-details.html">Course Details</a></li>
                    </ul>
                  </li>
                  <li class="{{ (request()->is('resources')
                    ||request()->is('viewcollegecoursetype')
                    ||request()->is('viewsuccessstories') 
                    ||request()->is('viewcollegecalendar')
                    ||request()->is('viewcareerguidance')) ? 'active' : '' }}"><a href="/resources" >Resources</a>
                    <ul class="dropdown_menu">
                      <li><a href="viewcollegecoursetype">College Course Type</a></li>
                      <li><a href="viewcollegecalendar">College Calendar</a></li>
                      <li><a href="viewcareerguidance">Career Guidance</a></li>
                      <li><a href="viewsuccessstories">Success Stories</a></li>
                  </ul>
                  </li>
                    
                  <li class="{{ (request()->is('viewNews')||request()->is('viewNews/*')) ? 'active' : '' }}"><a href="/viewNews" >NEWS</a> </li>
                  <li class="{{ (request()->is('tvetcollegetimes')) ? 'active' : '' }}"><a href="/tvetcollegetimes" >TVET College Times</a></li>
                  <li class="{{ (request()->is('contactus')
                    ||request()->is('viewgetintouch')
                    ||request()->is('viewregionallocations')
                    ||request()->is('viewfaqs')) ? 'active' : '' }}"><a href="/contactus" >Contact Us</a>
                    <ul class="dropdown_menu">
                      <li><a href="viewgetintouch">Contact Details</a></li>
                      <li><a href="viewregionallocations">Regional Locations</a></li>
                      <li><a href="viewfaqs">Frequenly Asked Questions</a></li>
                    </ul> 
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Mobile Menu Area End --> 
</header>
