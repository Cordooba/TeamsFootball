<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css" media="screen" title="no title" charset="utf-8">
        <style media="screen">
          @yield('style')
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
