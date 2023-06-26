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
<div class="card">

    <div class="body-wrapper">
        <div class="container-fluid">

            <!-- /.card-header -->
            <div class="card-body">
                <div style="background-color: #007bff;padding: 10px 10px">
                    <h1 style="color: #fff">Danh Sach Nguoi Dung</h1>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Tên</th>
                        <th>Email</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($user as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@extends("admin.html.js")
</body>
</html>
