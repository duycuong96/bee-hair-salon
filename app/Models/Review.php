<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use SoftDeletes;

    protected $table = 'reviews';

    protected $fillable = [
        'salon_id',
        'customer_id',
        'admin_id',
        'rating_stars',
        'detail',
        'status',
        'order_id'
    ];
    function branchSalon(){
        return $this->belongsTo('App\Models\BranchSalon', 'salon_id', 'id');
    }
    function customer(){
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
}
