<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Boolean Lindam</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  </head>
  <body>
    @include('partials/header')

    @yield('content')

    @include('partials/footer')

    <script type="text/javascript" src="{{ asset('js/app.js') }}">

    </script>
  </body>
</html>
