<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderproduct extends Model
{
    protected $table ="order_products";

    protected $fillable =[
        "order_id",
        "product_id",
        "quantity",
        "price",
    ];

    public function scopeSearch($query,$search){
        if ($search && $search !=""){

            return $query -> where("order_id","like","%$search%");
        }
        return  $query;

    }

    public function scopeFilter($query,$id){
        if ($id && $id !=0){
            return $query->where("order_products",$id);

        }
        return $query;
    }

    public function Orderdetails()
    {
        return $this->belongsTo(Orderdetails::class , 'order_id');
    }
    use HasFactory;
}
