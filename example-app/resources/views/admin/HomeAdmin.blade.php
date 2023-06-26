@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid" style="margin: 0 ; max-width: 1500px">
{{--            @include('admin.html.header')--}}
            <div style="background-color: #007bff;padding: 10px 10px">
                <h2 style="color: #fff">Danh Sách Sản Phẩm</h2>
            </div>
            <div style="margin: 20px 0px">
                <form action="{{route('list')}}" method="get">


                    <div class="input-group input-group-sm" style="width: 550px;">

                        <select name="name" class="mr-1">
                            <option value="0">Chọn Loại Sản Phẩm</option>

                            @foreach($category as $data)
                                <option @if(app("request")->input("name")==$data->name) selected
                                        @endif  value="{{$data->id}}"> {{$data->name}}

                                </option>
                            @endforeach


                        </select>


                        <input type="text" value="{{app("request")->input("search")}}" name="search"
                               class="form-control float-right "  placeholder="Tìm kiếm">

                        <div class="input-group-append btn btn-outline-warning">
                            <button type="submit" class="btn btn-default"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>


                    </div>
                </form>
            </div>
            <div>
                <a href="{{route("create-form")}}">
                    <button type="submit" class="btn btn-outline-warning"  style="color: #000 ; border-color:  #000 ; width: 177px ; border-radius: 0px" >
                        <i class="fa-solid fa-plus"></i>   Đăng sản phẩm
                    </button>
                </a>
            </div>
            <table class="table table-bordered" >
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col" style="width: 400px;">Tên</th>
                    <th scope="col">Ảnh</th>
                    <th scope="col">Giá SP</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Trạng Thái</th>
                    <th scope="col" style="width: 100px;">Loại Sản Phẩm</th>
                    <th scope="col">Bộ Nhớ</th>
                    <th scope="col">Thao Tác</th>
                </tr>
                </thead>
                <tbody>
                @foreach($product as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->name}}</td>
                        <td><img src="../{{$data->thumbnail}}" alt="" srcset="" width="80" height="80"> </td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->quantity}}</td>
                        <td>{{$data->status}}</td>
                        <td>{{$data->Category->name}}</td>
                        <td>{{$data->memory}}</td>
                        <td>
                            <form method="post" action="{{route("delete",["product"=>$data->id])}}" style="width: 50% ; float: left">
                                @method("DELETE")
                                @csrf
                                <button style="background-color: red ; color: #fff"  type="submit" onclick=" return confirm('Bạn có chắc muốn xoá sản phẩm???')" class="btn btn-outline-warning">
                                    Delete
                                </button>
                            </form>
                            <a href="{{route("edit-product",["product"=>$data->id])}}">
                                <button style="background-color: #0ea78b;color: #fff"  type="submit" class="btn btn-outline-warning">
                                    EDIT
                                </button>
                            </a>
                        </td>


                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
