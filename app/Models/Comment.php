<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';

    protected $fillable = [
        'post_id',
        'title',
        'content',
        'customer_id',
        'active',
    ];

    public function post()
    {
        return $this->belongsTo('App\Models\Post', 'post_id');
    }
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id');
    }

}
