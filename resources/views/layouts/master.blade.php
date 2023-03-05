<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Foko et al.">
  <title>{{ config('app.name') }}</title>

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