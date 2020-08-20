<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TimeSchedule extends Model
{
    protected $table = 'time_schedules';

    protected $fillable = [
        'time_start',
        'time_end',
    ];
}
