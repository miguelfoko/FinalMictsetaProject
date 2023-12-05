<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <meta name="X-CSRF-TOKEN" content="{{ csrf_token() }}">
        <title>Admin - TVET Colleges</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <!--<link rel="icon" href="favicon.ico" type="image/x-icon" />-->
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="/adminResources/css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->                   
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
             @include('partials.adminPartials.admin_nav_bar')
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search..."/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->                    
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                    <!-- MESSAGES -->
                    
                    <!-- END MESSAGES -->
                    <!-- TASKS -->
                    
                    <!-- END TASKS -->
                    <!-- LANG BAR -->
                    <li class="xn-icon-button pull-right">
                        <a href="#"><span class="flag flag-gb"></span></a>
                        <ul class="xn-drop-left xn-drop-white animated zoomIn">
                            <li><a href="#"><span class="flag flag-gb"></span> English</a></li>
                            <li><a href="#"><span class="flag flag-de"></span> Deutsch</a></li>
                            <li><a href="#"><span class="flag flag-cn"></span> Chinese</a></li>
                        </ul>                        
                    </li> 
                    <!-- END LANG BAR -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li class="active">Dashboard</li>
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    
                @yield('content')
                    
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="/adminResources/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="/adminResources/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="/adminResources/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='/adminResources/js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="/adminResources/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/scrolltotop/scrolltopcontrol.js"></script>
        
        <script type="text/javascript" src="/adminResources/js/plugins/morris/raphael-min.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/morris/morris.min.js"></script>       
        <script type="text/javascript" src="/adminResources/js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='/adminResources/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='/adminResources/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='/adminResources/js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="/adminResources/js/plugins/owl/owl.carousel.min.js"></script>                 
        
        <script type="text/javascript" src="/adminResources/js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TABLE PLUGINS-->       
        <script type='text/javascript' src='/adminResources/js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        
        <script type="text/javascript" src="/adminResources/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/tableexport/tableExport.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/tableexport/jquery.base64.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/tableexport/html2canvas.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/tableexport/jspdf/jspdf.js"></script>
        <script type="text/javascript" src="/adminResources/js/plugins/tableexport/jspdf/libs/base64.js"></script>        
        <!-- END TABLE PLUGINS-->  

        <!-- START TEMPLATE -->
        <script type="text/javascript" src="/adminResources/js/settings.js"></script>
        
        <script type="text/javascript" src="/adminResources/js/plugins.js"></script>        
        <script type="text/javascript" src="/adminResources/js/actions.js"></script>
        
        <script type="text/javascript" src="/adminResources/js/demo_dashboard.js"></script>
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->         
    </body>
</html>






