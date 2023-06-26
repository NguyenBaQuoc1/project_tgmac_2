@extends('admin.LayOut')
@section('main-content')
    <div class="body-wrapper">
        <div class="container-fluid">
            <div>
                <h2> Sửa Sản Phẩm</h2>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{route("update-category",['category'=>$category->id])}}" method="post">

                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tên Loại phẩm</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$category->name}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Status</label>
                            <input name="status" type="number" class="form-control" value="{{$category->status}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng Sản Phẩm</button>
                    </form>
                </div>
            </div>
        </div>

@endsection
