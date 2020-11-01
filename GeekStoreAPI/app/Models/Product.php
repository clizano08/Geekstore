<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function typeProduct()
    {
        return $this->belongsTo('App\Models\TypeProduct', 'typeproduct_id');
    }
    public function clasification()
    {
        return $this->belongsToMany('App\Models\Clasification', 'product_clasifications','product_id','clasification_id');
    }
    public function orderDetail()
    {
        return $this->belongsTo('App\Models\OrderDetail');
    }
}
