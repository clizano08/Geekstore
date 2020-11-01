<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    public function orderHeader()
    {
        return $this->hasMany('App\Models\OrderHeader','id');
    }
    public function product()
    {
        return $this->hasMany('App\Models\Product','id');
    }
}
