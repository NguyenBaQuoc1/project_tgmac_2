<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public  function list(){

        $user = User::all();
        $admin = Admin::all();

        return view("admin.user.list",compact('user'));
    }

    public  function create(){
        $data = DB::table('users')->WhereNotIn('id', DB::table('admins')->select('user_id'))
            ->get();
        return view('admin.user.createadmin', compact('data'));
    }

    public function save(Request $request)
    {

        $user_id = $request->get('id');

        DB::table('admins')->insert([
            'user_id' => $user_id,
            'role' => 'ADMIN'
        ]);

        return redirect()->to('/admin/user/list');
    }
    public function Product()
    {
        return $this->hasMany(Product::class,'cat_id');
    }

    public  function  listadmin(){
        $admin = Admin::all();
        $user = User::all();
        return view('admin.user.list-admin' , compact('admin' , 'user'));
    }

}
