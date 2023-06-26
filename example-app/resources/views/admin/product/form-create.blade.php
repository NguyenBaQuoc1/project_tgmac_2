@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Forms</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('create-product')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                                <input required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Hình Ảnh</label>
                                <input required type="file" class="form-control" name="thumbnail">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Price</label>
                                <input required name="price" type="number" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Số Lượng</label>
                                <input required name="quantity" type="number" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mô Tả</label>
                                <input required name="description" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Trạng Thái</label>
                                <input required name="status" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <select name="cat_id" class="mr-2 custom-select" style="width: 100%">
                                    <option value="0">Chọn Loại Sản Phảm</option>
                                    @foreach($category as $data)
                                        <option @if(app("request")->input("title_id")==$data->name) selected
                                                @endif  value="{{$data->id}}"> {{$data->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Bộ Nhớ</label>
                                <input  required name="memory" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Đăng Sản Phẩm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
