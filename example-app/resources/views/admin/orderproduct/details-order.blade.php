@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">

            <div style="background-color: #007bff;padding: 10px 10px">
                <h2 style="color: #fff">Chi Tiết Đơn Hàng</h2>
                <a href="{{url("/admin/order/list")}}">
                    <button type="submit" class="btn btn-outline-warning" style=" color: #fff">
                        Quay lại danh sách
                    </button>
                </a>
            </div>
            <table class="table table-bordered" >
                <thead>
                <tr>
                    <th scope="col">Mã Đơn Hàng</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">Email</th>
                    <th scope="col">SDT</th>
                    <th scope="col">Nước</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Ghi Chú</th>
                    <th scope="col">Hành Động</th>

                </tr>
                </thead>
                <tbody>
                @foreach($order as $ct)
                    <tr>
                        <td>{{$ct->Orderdetails->order_id}}</td>
                        <td>{{$ct->Orderdetails->fullname}}</td>
                        <td>{{$ct->Orderdetails->email}}</td>
                        <td>{{$ct->Orderdetails->telephone}}</td>
                        <td>{{$ct->Orderdetails->country}}</td>
                        <td>{{$ct->Orderdetails->address}}</td>
                        <td>{{$ct->Orderdetails->note}}</td>
                        <td>
                            <a href="{{route("form-edit",["order_id"=>$ct->order_id])}}">
                                <button type="submit" class="btn btn-outline-warning">
                                    Sửa
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
