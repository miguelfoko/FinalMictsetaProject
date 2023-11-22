<header id="header" class="fixed-top">
  
  
  
  
   <!--<a href="/">-->
    <img src="{{ asset('/img/TVET/Header1.png') }}" alt="" class="header">
   <!--</a>-->
  
  
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="container">
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
   <!--    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>-->
         <!--<div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
        <div class="topnav" id="myTopnav">
       
         <a  href="/" class="{{ (request()->is('/')) ? 'active' : '' }}" >Home</a>
          <a  href="/aboutus" class="{{ (request()->is('aboutus')||request()->is('abouttvet')
            ||request()->is('viewcommunitycolleges')
            ||request()->is('publicTvetCollege')
            ||request()->is('privateTvetCollege')
            ||request()->is('viewsetas')) ? 'active' : '' }}" >About Us</a>
          <a  href="/examinations" class="{{ (request()->is('examinations')
            ||request()->is('viewexamresources')
            ||request()->is('viewexamtrainingvideos')
            ||request()->is('viewicasstrainingvideos')) ? 'active' : '' }}">Examinations</a>
        <a  href="/resources" class="{{ (request()->is('resources')
            ||request()->is('viewcollegecoursetype')
            ||request()->is('viewsuccessstories') 
            ||request()->is('viewcollegecalendar')
            ||request()->is('viewcareerguidance')) ? 'active' : '' }}">Resources</a>
          <a  href="/viewNews" class="{{ (request()->is('viewNews')||request()->is('viewNews/*')) ? 'active' : '' }}">News</a>
          <a  href="/tvetcollegetimes" class="{{ (request()->is('tvetcollegetimes')) ? 'active' : '' }}">TVET College Times</a>
         <a  href="/contactus" class="{{ (request()->is('contactus')
            ||request()->is('viewgetintouch')
            ||request()->is('viewregionallocations')
            ||request()->is('viewfaqs')) ? 'active' : '' }}">Contact US</a>
         <a href="javascript:void(0);" class="icon" onclick="myFunction()">    <i class="fa fa-bars"></i>
  </a>
       
      </div>
      </div>
  </nav>
    
  </header><!-- End Header -->
  <script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>