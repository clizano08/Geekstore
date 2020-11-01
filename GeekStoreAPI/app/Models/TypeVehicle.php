<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVehicle extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function vehicle()
    {
        return $this->hasMany('App\Models\Vehicle');
    }
}
