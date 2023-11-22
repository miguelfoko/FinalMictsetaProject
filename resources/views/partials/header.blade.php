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
          <div class="logo"> <a href="/"><img src="{{ asset('/img/TVET/Header1.png') }}" alt="DHET" data-popupalt-original-title="null" title="DHET" style="width: 100%; height:auto;" ></a> </div>
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
                <li class="active"><a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}" >Home</a></li>
                <li><a href="/aboutus" class="{{ (request()->is('aboutus')||request()->is('abouttvet')
                    ||request()->is('viewcommunitycolleges')
                    ||request()->is('publicTvetCollege')
                    ||request()->is('privateTvetCollege')
                    ||request()->is('viewsetas')) ? 'active' : '' }}">About Us</a></li>
                <li><a href="/examinations" class="{{ (request()->is('examinations')
                    ||request()->is('viewexamresources')
                    ||request()->is('viewexamtrainingvideos')
                    ||request()->is('viewicasstrainingvideos')) ? 'active' : '' }}">Examinations<i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown_menu">
                    <li><a href="course-grid.html">Course Grid</a></li>
                    <li><a href="course-list.html">Course List</a></li>
                    <li><a href="course-details.html">Course Details</a></li>
                  </ul>
                </li>
                <li><a href="/resources" class="{{ (request()->is('resources')
                    ||request()->is('viewcollegecoursetype')
                    ||request()->is('viewsuccessstories') 
                    ||request()->is('viewcollegecalendar')
                    ||request()->is('viewcareerguidance')) ? 'active' : '' }}">Resources </a></li>
                <li><a href="/viewNews" class="{{ (request()->is('viewNews')||request()->is('viewNews/*')) ? 'active' : '' }}">News </a></li>
                <li><a href="/tvetcollegetimes" class="{{ (request()->is('tvetcollegetimes')) ? 'active' : '' }}">TVET College Times </a></li>
                <li><a href="/contactus" class="{{ (request()->is('contactus')
                    ||request()->is('viewgetintouch')
                    ||request()->is('viewregionallocations')
                    ||request()->is('viewfaqs')) ? 'active' : '' }}">Contact Us </a></li> 
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
                  <li class="active"><a href="/" class="{{ (request()->is('/')) ? 'active' : '' }}" >Home</a></li>
                  <li><a href="/aboutus" class="{{ (request()->is('aboutus')||request()->is('abouttvet')
                    ||request()->is('viewcommunitycolleges')
                    ||request()->is('publicTvetCollege')
                    ||request()->is('privateTvetCollege')
                    ||request()->is('viewsetas')) ? 'active' : '' }}">About Us</a></li>
                  <li><a href="/examinations" class="{{ (request()->is('examinations')
                    ||request()->is('viewexamresources')
                    ||request()->is('viewexamtrainingvideos')
                    ||request()->is('viewicasstrainingvideos')) ? 'active' : '' }}">Examinations</a>
                    <ul class="dropdown_menu">
                      <li><a href="course-grid.html">Course Grid</a></li>
                      <li><a href="course-list.html">Course List</a></li>
                      <li><a href="course-details.html">Course Details</a></li>
                    </ul>
                  </li>
                  <li><a href="/resources" class="{{ (request()->is('resources')
                    ||request()->is('viewcollegecoursetype')
                    ||request()->is('viewsuccessstories') 
                    ||request()->is('viewcollegecalendar')
                    ||request()->is('viewcareerguidance')) ? 'active' : '' }}">Resources</a> </li>
                    
                  <li><a href="/viewNews" class="{{ (request()->is('viewNews')||request()->is('viewNews/*')) ? 'active' : '' }}">NEWS</a> </li>
                  <li><a href="/tvetcollegetimes" class="{{ (request()->is('tvetcollegetimes')) ? 'active' : '' }}">TVET College Times</a></li>
                  <li><a href="/contactus" class="{{ (request()->is('contactus')
                    ||request()->is('viewgetintouch')
                    ||request()->is('viewregionallocations')
                    ||request()->is('viewfaqs')) ? 'active' : '' }}">Contact Us</a></li>
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
