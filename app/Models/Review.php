<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $table = 'reviews';

    protected $fillable = [
        'salon_id',
        'customer_id',
        'employee_id',
        'rating_stars',
        'detail',
        'status',
    ];
}
