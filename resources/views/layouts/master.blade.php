<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<html lang="{{config('app.locale')}}" class="no-js">
<head>
    <meta charset="UTF-8">
    <title>Tabadul</title>
    @include ('layouts.partials.head')
    @yield('head')
</head>

<body id="telefun">
@include('layouts.partials.navbar')
@yield('content')

@include('layouts.partials.footer')
@yield('footer')
</body>
</html>
