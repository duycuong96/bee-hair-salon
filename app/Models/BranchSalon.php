<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BranchSalon extends Model
{
    protected $table = 'branch_salons';

    protected $fillable = [
        'name',
        'thumb_img',
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
        return $this->belongsTo('App\Models\Admin', 'admin_id', 'id');
    }
}
