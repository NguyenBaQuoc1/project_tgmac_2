@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Forms</h5>
                <div class="card">
                    <div class="card-body">
                        @foreach($orderdetails as $data)
                        <form action="{{route("update-order",['orderdetails'=>$data->order_id])}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên Khách Hàng</label>
                                <input value="{{$data->fullname}}" name="fullname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input value="{{$data->email}}" name="email" type="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Số điện thoại</label>
                                <input value="{{$data->telephone}}" name="telephone" type="number" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Đất Nước</label>
                                <input value="{{$data->country}}" name="country" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Thành Phố</label>
                                <input value="{{$data->city}}" name="city" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Địa Chỉ</label>
                                <input value="{{$data->address}}" name="address" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Địa Chỉ</label>
                                    <input value="{{$data->note}}" name="note" type="text" class="form-control" id="exampleInputPassword1">
                                </div>
                            <button type="submit" class="btn btn-primary">Sửa thông tin</button>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
