<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Permission\Traits\HasRoles;

class AdminUser extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    use HasRoles;

    protected $table = 'admin_users';
    protected $guard = 'admins';

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function role()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }
}
