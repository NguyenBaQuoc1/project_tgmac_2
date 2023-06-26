<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->get('search');
        $name = $request->get('name');

        $category = Category::all();
        $product = Product::Filter($name)->Search("%$search%")->orderBy("created_at", "desc")->paginate(20);



//         dd($category);
        return view("admin.HomeAdmin", compact('product' , 'category'));
    }

    public function edit(Product $product)
    {
//        dd($product);
        $category = Category::all();
        return view("admin.product.edit-product", compact('product' , 'category'));
    }

    public function delete(Product $product ){
        $product->delete();
        return redirect()->to("/admin/list");
    }



    public function homeadmin(Request $request){
        $product = Product::all();
        $category = Category::all();
        return view("admin.HomeAdmin" , compact('product' , 'category'));
    }

    public function create(Product $product)
    {

        $category = Category::all();


        return view('admin.product.form-create', compact('category', 'product', ));
    }


    public function save(Request $request)
    {

        $request->validate([
            'name' => 'required|string|min:6',
            'thumbnail' =>' nullable|image|mimes:jpg,png,jpeg',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'status' => 'required',
            'cat_id' => 'required',
            'memory' => 'required'

        ], [
                'required' => 'Vui lòng nhập nội dung',
                "string" => "Phải nhập vào là một chuỗi văn bản",
                "min" => "Phải nhập :attribute  tối thiểu :min",
                'image:nullable' => "image null",
                'image:image' => " image",
                'image:mimes' => "type",
            ]
        );
//        $thumbnail = $request->get('thumbnail');
        $name = $request->get('name');
        $price = $request->get('price');
        $quantity = $request->get('quantity');
        $description = $request->get('description');
        $status = $request->get('status');
        $cat_id = $request->get('cat_id');
        $memory = $request->get('memory');

        $slug = Str::slug($request->name).random_int(1, 1000);


//
        try {
            $thumbnail = null;
            $file = $request->file("thumbnail");
            $fileName = time() . $file->getClientOriginalName();
            //            $ext = $file->getClientOriginalExtension();
            //            $fileName = time().".".$ext;
            $path = public_path("uploads");
            $file->move($path, $fileName);
            $thumbnail = "uploads/" . $fileName;

            Product::create([
                'name' => $name,
                'price' => $price,
                'quantity' => $quantity ,
                'description' => $description ,
                'status' => $status ,
                'cat_id' =>$cat_id ,
                'memory' => $memory ,
                'slug' => $slug ,
                'thumbnail' => $thumbnail,

            ]);
            return redirect()->to('/admin/list');
        } catch (\Throwable $e){
            return redirect()->back()->with("error", $e->getMessage());
        };
    }


  public function update(Product $product , Request $request)
    {
//        dd($product);
        $request->validate([
            'name' => 'required|string|min:6',
            'thumbnail' =>' nullable|image|mimes:jpg,png,jpeg',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            'status' => 'required',
            'cat_id' => 'required',
            'memory' => 'required'

        ], [
                'required' => 'Vui lòng nhập nội dung',
                "string" => "Phải nhập vào là một chuỗi văn bản",
                "min" => "Phải nhập :attribute  tối thiểu :min",
                'image:nullable' => "image null",
                'image:image' => " image",
                'image:mimes' => "type",
            ]
        );
//        $thumbnail = $request->get('thumbnail');
        $name = $request->get('name');
        $price = $request->get('price');
        $quantity = $request->get('quantity');
        $description = $request->get('description');
        $status = $request->get('status');
        $cat_id = $request->get('cat_id');
        $memory = $request->get('memory');

        $slug = Str::slug($request->name).random_int(1, 1000);


      try {
          if ($request->hasFile("thumbnail")) {
              $thumbnail = null;
              $file = $request->file("thumbnail");
              $fileName = time() . $file->getClientOriginalName();
              //            $ext = $file->getClientOriginalExtension();
              //            $fileName = time().".".$ext;
              $path = public_path("uploads");
              $file->move($path, $fileName);
              $thumbnail = "uploads/" . $fileName;
          }


          $product->update([
              'name' => $name,
              'price' => $price,
              'quantity' => $quantity ,
              'description' => $description ,
              'status' => $status ,
              'cat_id' =>$cat_id ,
              'memory' => $memory ,
              'slug' => $slug ,
              'thumbnail' => $thumbnail,

          ]);
          return redirect()->to('/admin/list');
      } catch (\Throwable $e){
          return redirect()->back()->with("error", $e->getMessage());
      };
    }
}

