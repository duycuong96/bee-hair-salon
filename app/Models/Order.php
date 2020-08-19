<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = [
        'customer_id',
        'salon_id',
        'time_start',
        'time_end',
        'price',
        'status'
    ];

}
