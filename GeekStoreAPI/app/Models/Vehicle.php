<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    public function typeVehicle()
    {
        return $this->belongsTo('App\Models\TypeVehicle', 'typeVehicle_id');
    }
    public function deliverymen()
    {
        return $this->hasMany('App\Models\Deliverymen');
    }
}
