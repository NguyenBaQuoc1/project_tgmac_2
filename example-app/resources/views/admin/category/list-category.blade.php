@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">

            <div style="background-color: #007bff;padding: 10px 10px">
                <h2 style="color: #fff">Danh Sách Loại Sản Phẩm</h2>
            </div>
            <div>
                <a href="{{route("form-category")}}">
                    <button type="submit" class="btn btn-outline-warning"  style="color: #000 ; border-color:  #000 ; width: 190px ; border-radius: 0px" >
                        <i class="fa-solid fa-plus"></i>    Thêm loại Sản Phẩm
                    </button>
                </a>
            </div>
            <table class="table table-bordered" >
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Loại Sản Phẩm</th>
                    <th scope="col" width="250px">Hành Động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($category as $ct)
                    <tr>
                        <th scope="row">{{$ct->id}}</th>
                        <td>{{$ct->name}}</td>
                        <td>
                            <div style="width: 50%;float: left">
                                <form  method="post" action="{{route("delete-category",["category"=>$ct->id])}}">
                                    @method("DELETE")
                                    @csrf
                                    <button style="background-color: red;color: #fff"  type="submit" onclick=" return confirm('Bạn có chắc muốn xoá sản phẩm???')" class="btn btn-outline-warning">
                                        Delete
                                    </button>

                                </form>
                            </div>
                            <div style="width: 50%; float: left">
                                <a  href="{{route("edit-category",["category"=>$ct->id])}}" >
                                    <button style="background-color: #0ea78b;color: #fff" type="submit" class="btn btn-outline-warning">
                                        Edit
                                    </button>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
