<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeDeliverie extends Model
{
    use HasFactory;

    public function orderHeader()
    {
        return $this->hasMany('App\Models\TypeDeliverie');
    }
}
