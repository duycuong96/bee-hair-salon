<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderService extends Model
{

    use SoftDeletes;

    protected $table = 'order_service';

    protected $fillable = [
        'order_id',
        'service_id',
        'price',
    ];
    function order(){
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }
    function service(){
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
}
