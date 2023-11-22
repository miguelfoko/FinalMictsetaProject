<header id="header" class="fixed-top">
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>TVET Colleges</title>
@include('partials.styles')
</head>

<body>
    
@include('partials.header')

<main >
    @yield('content')
</main>

@include('partials.footer')

@include('partials.scripts')
      
</body>
</html>