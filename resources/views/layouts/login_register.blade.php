<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <!-- META SECTION -->
        <title>Admin - TVET Colleges</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->     
        @include('partials.styles')
        <link rel="stylesheet" type="text/css" id="theme" href="/adminResources/css/theme-default.css"/>
       
        <!-- EOF CSS INCLUDE -->                                     
    </head>
    <body>
        @include('partials.header') 
        <div class="login-container login-v2"> 
            <div class="login-box animated fadeInDown">
                <div class="login-body">
                    @yield('content')
                </div>
                <!--<div class="login-footer">
                    <div class="pull-left">
                        &copy; 2023 MICTSETA
                    </div>
                    <div class="pull-right">
                        <a href="#">About</a> |
                        <a href="#">Privacy</a> |
                        <a href="#">Contact Us</a>
                    </div>
                </div>-->
            </div>
        </div>
        @include('partials.footer')
        @include('partials.scripts')
    </body>
</html>






