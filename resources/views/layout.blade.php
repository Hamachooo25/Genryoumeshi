<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes">
<link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">
  <title>@yield('title')</title>
</head>
<body>
  <!--header-->
  <header>
    @include('header')
  </header>
  @yield('home')
  @yield('search')
  <footer>
    @include('footer')
  </footer>
</body>
</html>