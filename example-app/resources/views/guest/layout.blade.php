<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    @extends('guest.html.css')
</head>
<body>
    @include('guest.html.header')
    @yield('main-content')
    @extends('guest.html.js')
    @include('guest.html.footer')
</body>
</html>
