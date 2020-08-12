<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

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

    public function author()
    {
        return $this->belongsTo(Admin::class, 'author_id', 'id');
    }
}
