<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ="category";

    protected $fillable =[
        "id",
        "name",
        "slug",
        "status",
    ];
    use HasFactory;

    public function Product()
    {
        return $this->hasMany(Product::class , 'cat_id');
    }


}
