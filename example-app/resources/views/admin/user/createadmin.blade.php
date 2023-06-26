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
                <div style="background-color: #007bff;padding: 10px 10px"" >
                    <h1 style="color: #fff">Thêm Admin</h1>
                </div>
                <form role="form" action="{{route('create-admin')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <select name="id" class="mr-2 custom-select" style="width: 45%">
                        <option value="0">Chọn tài khoản</option>

                        @foreach($data as $item)
                            <option @if(app("request")->input("id")==$item->id) selected
                                    @endif  value="{{$item->id}}"> {{$item->email}}

                            </option>
                        @endforeach

                        @error("id")
                        <p class="text-danger">{{$message}}</p>
                        @enderror


                    </select>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Thêm mới</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@extends("admin.html.js")
</body>
</html>
