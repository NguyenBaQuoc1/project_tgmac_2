@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div style="background-color: #007bff;padding: 10px 10px">
                <h2 style="color: #fff">Thêm Loại Sản Phẩm</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{route('add-category')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên Loại phẩm</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Status</label>
                            <input name="status" type="number" class="form-control" >
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng Sản Phẩm</button>
                    </form>
                </div>
        </div>
    </div>

@endsection
