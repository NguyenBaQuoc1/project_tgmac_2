<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table ="products";

    protected $fillable =[
        "thumbnail",
        "name",
        "price",
        "quantity",
        "description",
        "status",
        "cat_id",
        "memory",
        "slug"
    ];

    public function scopeSearch($query,$search){
        if ($search && $search !=""){

            return $query -> where("name","like","%$search%");
        }
        return  $query;

    }

    public function scopeFilter($query,$name){
        if ($name && $name !=0){
            return $query->where("cat_id",$name);

        }
        return $query;
    }

    public function Category(){
        return $this->belongsTo(Category::class , 'cat_id');
    }

    use HasFactory;
}
