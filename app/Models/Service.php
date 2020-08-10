<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table = 'services';

    protected $fillable = [
        'name',
        'slugs',
        'detail',
        'service_id',
        'images',
        'price',
        'sale_price',
        'estimate',
    ];
}
