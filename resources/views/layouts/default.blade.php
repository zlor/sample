<!DOCTYPE html>
<html>
  <head>
      <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Sample') - Laravel 入门教程</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
      @include('layouts._header')

      <div class="container">
          <div class="col-md-offset-1 col-md-10">
              @include('shared._messages')
              @yield('content')
              @include('layouts._footer')
          </div>
      </div>

      <script src="/js/app.js" charset="utf-8"></script>
  </body>
</html>
