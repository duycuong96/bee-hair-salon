<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class Customer extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasRoles;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'avatar',
        'birthday',
        'phone',
        'email',
        'password',
        'address',
        'ward_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
}
