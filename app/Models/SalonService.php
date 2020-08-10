<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalonService extends Model
{
    protected $table = 'salon_service';

    protected $fillable = [
        'salon_id',
        'service_id',
    ];
    public $timestamps = false;

}
