<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'salon_id',
        'customer_id',
        'rating_stars',
        'detail',
        'status',
    ];
    function branchSalon(){
        return $this->belongsTo('App\Models\BranchSalon', 'salon_id', 'id');
    }
    function customer(){
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
}
