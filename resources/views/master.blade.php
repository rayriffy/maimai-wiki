<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script>
    window.Laravel = { csrfToken: '{{ csrf_token() }}' }
  </script>
  <title>@yield('title') | maiWiki</title>
  <link type="text/css" rel="stylesheet" href="/css/app.css"  media="screen,projection"/>
</head>
<body>

  @include('components.navbar')

  @yield('content')

  <script src="/js/app.js"></script>
</body>
</html>