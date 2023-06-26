<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function list(Request $request)
    {
        $category = Category::all();
//         dd($category);
        return view("admin.category.list-category", compact('category'));
    }

    public function delete(Category $category ){
        $category->delete();
        return redirect()->to("/admin/category/list");
    }

    public function create(){
        return view("admin.category.addcategory");
    }

    public function save(Request $request){
        $request->validate([
            'name'=>'required|string|min:6',
            'status'=>'required'
        ],[
            'required'=>'Vui Lòng Nhập Tên Loại Sản Phẩm',
            'string'=>'Phải Nhập Đủ Kí Tự'
        ]);

        $name = $request->get('name');
        $status = $request->get('status');

        $slug = Str::slug($request->name,'-').random_int(1,1000);



        Category::create([
            'name'=>$name,
            'status'=>$status,
            'slug'=> $slug
        ]);

        return redirect()->to('/admin/category/list');
    }

    public function edit(Category $category){
        return view("admin.category.edit-category" , compact("category"));
    }

    public function update(Category $category , Request $request){
        $request->validate([
            'name' => 'required|string|min:6',
            'status' => 'required',
        ],[
            'required' => 'Vui lòng nhập nội dung',
            "string" => "Phải nhập vào là một chuỗi văn bản",
        ]);
        $name = $request->get('name');
        $status = $request->get('status');
        $slug = Str::slug($request->name).random_int(1, 1000);



        $category->update
        ([

            'name' => $name,
            'status' => $status,
            'slug'=> $slug
        ]);

        return redirect()->to('/admin/category/list');

    }
}
