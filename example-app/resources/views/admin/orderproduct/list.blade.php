@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">

            <div style="background-color: #007bff;padding: 10px 10px">
                <h2 style="color: #fff">Danh Sách Đơn Hàng</h2>
            </div>
            <div style="margin: 20px 0px">
                <form action="{{route('list-order')}}" method="get">


                    <div class="input-group input-group-sm" style="width: 550px;">
                        <input type="text" value="{{app("request")->input("search")}}" name="search"
                               class="form-control float-right "  placeholder="Nhập Mã Đơn Hàng Cần Tìm">

                        <div class="input-group-append btn btn-outline-warning">
                            <button type="submit" class="btn btn-default"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-bordered" >
                <thead>
                <tr>
                    <th scope="col">Mã Đơn Hàng</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">Số Lượng</th>
                    <th scope="col">Price</th>
                    <th scope="col">Hành Động</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order as $ct)
                    <tr>
                        <td>{{$ct->order_id}}</td>
                        <td>{{$ct->Orderdetails->fullname}}</td>
                        <td>{{$ct->quantity}}</td>
                        <td>{{$ct->price}}</td>
                        <td>
                            <a href="{{route("order-details",["order_id"=>$ct->order_id])}}">
                                <button type="submit" class="btn btn-outline-warning">
                                    Xem Chi Tiết
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
