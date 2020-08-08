<?php

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_users = AdminUser::create([
            'name' => 'Admin',
            'email' => 'vuduycuong6789@gmail.com',
            'password' =>  Hash::make('123456'),
        ]);
        $admin_users->assignRole('administrator');
    }
}
