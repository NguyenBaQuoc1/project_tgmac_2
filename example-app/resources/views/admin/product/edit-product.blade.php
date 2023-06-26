@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div class="card-body">
                <div style="background-color: #007bff;padding: 10px 10px">
                    <h5 class="card-title fw-semibold mb-4" style="color: #fff" >Sửa Sản Phẩm </h5>
                </div>
                <div class="card">
                    <div class="card-body">
                        <form action="{{route("update-product",['product'=>$product->id])}}" method="post" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên sản phẩm</label>
                                <input name="name" value="{{$product->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                Ảnh Cũ : <img src="../{{$product->thumbnail}}" alt="" srcset="" width="80" height="80">
                                <br>
                                <label for="exampleInputEmail1" class="form-label">Hình Ảnh Mới</label>
                                <input type="file" class="form-control" name="thumbnail">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Price</label>
                                <input value="{{$product->price}}" name="price" type="number" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Số Lượng</label>
                                <input value="{{$product->quantity}}" name="quantity" type="number" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mô Tả</label>
                                <input value="{{$product->description}}" name="description" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Trạng Thái</label>
                                <input value="{{$product->status}}" name="status" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <select name="cat_id" class="mr-2 custom-select" style="width: 100%">
                                    @foreach($category as $data)
                                        <option @if(app("request")->input("title_id")==$data->name) selected
                                                @endif  value="{{$data->id}}"> {{$data->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Bộ Nhớ</label>
                                <input value="{{$product->memory}}" name="memory" type="text" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Sửa Sản Phẩm</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
