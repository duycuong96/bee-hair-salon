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
        'status',
    ];
    function customer(){
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
    function branchSalon(){
        return $this->belongsTo('App\Models\BranchSalon', 'salon_id', 'id');
    }
}
