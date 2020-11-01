<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public function orderHeader()
    {
        return $this->hasMany('App\Models\OrderHeader','id');
    }
}
