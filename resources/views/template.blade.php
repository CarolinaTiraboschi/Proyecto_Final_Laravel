<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/css/normalize.css" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle') -Syzygy</title>
  </head>
  <body>
    @include('partials.navbar')

    @yield('mainContent')


  </body>
