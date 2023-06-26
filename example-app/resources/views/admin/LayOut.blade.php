<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ADMIN</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    @include("admin.html.css")

</head>

<body>
    @include('admin.html.Sidebar')
    @yield('main-content')



    @extends("admin.html.js")
</body>
</html>
