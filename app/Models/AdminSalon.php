<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminSalon extends Model
{
    protected $table = 'admin_salons';

    protected $fillable = [
        'admin_id',
        'salon_id',
    ];
    function admin(){
        return $this->belongsTo(BranchSalon::class);
    }
}
