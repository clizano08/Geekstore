<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHeader extends Model
{
    use HasFactory;

    public function typeDeliverie()
    {
        return $this->belongsTo('App\Models\TypeDeliverie', 'typedeliverie_id');
    }
    public function orderDetail()
    {
        return $this->belongsTo('App\Models\OrderDetail', 'orderheader_id');
    }
    public function deliverymen()
    {
        return $this->belongsTo('App\Models\Deliverymen');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function bill()
    {
        return $this->hasMany('App\Models\Bill');
    }
}
