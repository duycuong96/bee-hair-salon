<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ward extends Model
{
    protected $table = 'ward';

    protected $fillable = [
        'name',
        'type',
        'district_code',
    ];
}
