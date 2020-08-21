<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchSalon extends Model
{
    protected $table = 'branch_salons';

    protected $fillable = [
        'name',
        'image',
        'content',
        'work_time',
        'address',
        'phone',
        'view',
        'status',
        'ward_id',
        'admin_id',
        'locations',
    ];
    function admin(){
        return $this->belongstoMany(Admin::class, 'admin_salons', 'admin_id', 'salon_id');
    }
}
