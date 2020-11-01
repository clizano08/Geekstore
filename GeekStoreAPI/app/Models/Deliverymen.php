<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deliverymen extends Model
{
    use HasFactory;

    public function orderHeader()
    {
        return $this->hasMany('App\Models\OrderHeader');
    }
    public function vehicle()
    {
        return $this->belongsTo('App\Models\Vehicle');
    }
}
