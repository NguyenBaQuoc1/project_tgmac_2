<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdetails extends Model
{
    protected $table ="order";

    protected $fillable =[
        "fullname",
        "email",
        "telephone",
        "country",
        "city",
        "address",
        "note"
    ];
    protected $primaryKey = 'order_id';

    public function Orderproduct()
    {
        return $this->hasOne(Orderproduct::class , 'order_id');
    }
    use HasFactory;
}
