<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <style type="text/css">
    #popup{
        display: none;
    }
    </style>
  
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 footer-links text-center"> 
              <h4>About the TVET College Times website</h4>
              <span> This page provides information about the TVET College Times website, including: </span>
            @foreach ($footerElement as $key )
                                
                <ul>      
                  <div class="testeurB" >          
                        <li><a class="testFooter " onclick="load_footer_content(1001,1006)">Purpose of the website</a></li>
                            <div id="1001" title="{{ $key->purpose }}" class="bx ">
                                {!! $key->purpose !!}
                            </div>
                        <li> <a class="testFooter" onclick="load_footer_content(1002,1006)">Content available on the website</a></li>
                      
                          <div id="1002" title="{{ $key->content }}" class="bx">
                              {!! $key->content !!}
                          </div>

                        <li> <a class="testFooter" onclick="load_footer_content(1003,1006)"">Additional help to access information on the website</a></li>
                      
                          <div id="1003" title="{{ $key->additionalHelp }}" class="bx">
                              {!! $key->additionalHelp !!}
                          </div>

                        <li> <a class="testFooter" onclick="load_footer_content(1004,1006)"">Additional help to access information on the website</a></li>
                      
                          <div id="1004" title="{{ $key->listOfAccronyms }}" class="bx">
                              {!! $key->listOfAccronyms !!}
                          </div>

                  </div>   
                </ul>
                
              @endforeach
          </div>


          <div class="col-lg-3 col-md-6 footer-links text-center"> 
            <h4>Site Map</h4>
            <ul>
              <li> <a href="/">Home</a></li>
              <li> <a href="/abouttvet">About TVET</a></li>
              <li> <a href="/examinations">Examinations</a></li>
              <li> <a href="/resources">Resources</a></li>
              <li> <a href="/viewNews">News</a></li>
              <li> <a href="/tvetcollegetimes">TVET College Times</a></li>
              <li> <a href="/contactus">Contact US</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links text-center">
                        <h4>Terms and conditions</h4>
              @foreach ($footerElement as $key )
                  
                    <ul>
                      <div class="testeurB" >  
                        <li> <a class="testFooter" onclick="load_footer_content(1005,1006)">Copyright notice</a></li>
                        <div id="1005" title="{{ $key->copyright }}" class="bx ">
                          {!! $key->copyright !!}
                        </div>
                        <li> <a class="testFooter" onclick="load_footer_content(1006,1006)">Disclaimer notice</a></li>
                        <div id="1006" title="{{ $key->disclaimer }}" class="bx ">
                          {!! $key->disclaimer !!}
                        </div>
                      </div>
                    </ul>
                  
            @endforeach
            </div>

            <div class="col-lg-3 col-md-6 footer-newsletter text-center">
              <h4>Intranet</h4>
              
               <a href="/home" target=”_blank”>Login as administrator</a>
              
              
              <form action="" method="post">
                <input type="email" name="email"><input type="submit" value="Subscribe">
              </form>
          </div>

        </div>

          
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

    <script type="text/javascript">
     function load_footer_content(theId,i){
            var openDropdown = document.getElementById(theId);
            if(openDropdown.style.display == "block"){
              openDropdown.style.display = "none";
            }else{
              openDropdown.style.display = "block";
            }
            for(j=1001;j<=i;j++){
              if(j!=theId){
                openDropdown = document.getElementById(j);
                openDropdown.style.display = "none";
              }
            }
            
        }
       
         // Close the dropdown if the user clicks outside of it
         window.onclick = function(event) {
          if (!event.target.matches('.testFooter')) {
            for (k = 1001; k <= 1006; k++) {
              var openDropdown = document.getElementById(k);
                openDropdown.style.display = "none";
            }
          }
          if (!event.target.matches('.dropbtn')) {
            for (k = 1; k <= 100; k++) {
              var openDropdown = document.getElementById(k);
                openDropdown.style.display = "none";
            }
          }
        }
</script>
    
  </footer><!-- End Footer -->