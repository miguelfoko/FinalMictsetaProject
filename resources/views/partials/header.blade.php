<header id="header" class="fixed-top">
  
  
  
  
  <a href="/"><img src="{{ asset('/img/TVET/Header1.png') }}" alt="" class="header"></a>
  
  

  
  
    <div class="container d-flex align-items-center">

      
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a  href="/" class="{{ (request()->is('/')) ? 'active' : '' }}" >Home</a></li>
          <li><a  href="/aboutus" class="{{ (request()->is('aboutus')||request()->is('abouttvet')
            ||request()->is('viewcommunitycolleges')
            ||request()->is('publicTvetCollege')
            ||request()->is('privateTvetCollege')
            ||request()->is('viewsetas')) ? 'active' : '' }}" >About Us</a></li>
          <li><a  href="/examinations" class="{{ (request()->is('examinations')
            ||request()->is('viewexamresources')
            ||request()->is('viewexamtrainingvideos')
            ||request()->is('viewicasstrainingvideos')) ? 'active' : '' }}">Examinations</a></li>
          <li><a  href="/resources" class="{{ (request()->is('resources')
            ||request()->is('viewcollegecoursetype')
            ||request()->is('viewsuccessstories') 
            ||request()->is('viewcollegecalendar')
            ||request()->is('viewcareerguidance')) ? 'active' : '' }}">Resources</a></li>
          <li><a  href="/viewNews" class="{{ (request()->is('viewNews')||request()->is('viewNews/*')) ? 'active' : '' }}">News</a></li>
          <li><a  href="/tvetcollegetimes" class="{{ (request()->is('tvetcollegetimes')) ? 'active' : '' }}">TVET College Times</a></li>
          <li><a  href="/contactus" class="{{ (request()->is('contactus')
            ||request()->is('viewgetintouch')
            ||request()->is('viewregionallocations')
            ||request()->is('viewfaqs')) ? 'active' : '' }}">Contact US</a></li>

    </div>
	
    
  </header><!-- End Header -->