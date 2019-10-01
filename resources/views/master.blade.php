<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <style media="screen">
     body{
      background-color: blue;
     }
    </style>
   </head>
   <body>
        @yield('content')
   </body>
   <footer>@yield('footer')</footer>
 </html>
