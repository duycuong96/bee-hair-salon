<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'title',
        'content',
        'customer_id',
    ];
    function customer(){
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }
}
