<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'title',
        'slugs',
        'content',
        'image',
        'active',
        'like',
        'category_id',
        'admin_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
