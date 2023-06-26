<?php

namespace App\Http\Controllers;

use App\Models\Orderdetails;
use App\Models\Orderproduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderProducts extends Controller
{
//    const UPDATED_AT = null;
    //
    public function list(Request $request){
        $search = $request->get('search');
        $id = $request->get('id');
        $order = Orderproduct::Filter($id)->Search("%$search%")->orderBy("created_at", "desc")->paginate(20);


        return view('admin.orderproduct.list',compact('order'));

    }

    public function details(){
        $order = Orderproduct::all();

//        $details = Orderdetails::all();
        return view('admin.orderproduct.details-order',compact('order' ));
    }


    public  function  edit(Orderdetails $orderdetails){
        $orderdetails = Orderdetails::all();

        return view('admin.orderproduct.edit' , compact('orderdetails'));
    }





    public function update(Orderdetails $orderdetails , Request $request)
    {
//        dd($orderdetails);
        $request->validate([
            'fullname' => 'required|string|min:10',
            'email' =>'required',
            'telephone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'note'=>'required'

        ], [
                'required' => 'Vui lòng nhập nội dung',
                "string" => "Phải nhập vào là một chuỗi văn bản",
                "min" => "Phải nhập :attribute  tối thiểu :min",

            ]
        );


        $fullname = $request->get('fullname');
//        dd($fullname);
        $email = $request->get('email');
        $telephone = $request->get('telephone');
        $country = $request->get('country');
        $city = $request->get('city');
        $address = $request->get('address');
        $note = $request->get('note');



        $orderdetails->update([
            'fullname' => $fullname,
            'email' => $email,
            'telephone' => $telephone,
            'country' => $country,
            'city' => $city,
            'address' => $address,
            'note' => $note,
            'updated_at'

        ]);

        return redirect()->to('/admin/order/list');
    }

}
