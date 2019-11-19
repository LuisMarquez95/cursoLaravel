<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <style>
        .active a{
            color: red;
            text-decoration: none;
        }
    </style>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>@yield('title')</title>
</head>
<body>
@include('partials.nav')
@yield('content')
</body>
</html>
