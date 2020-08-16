<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = Customer::create([
            'name' => 'Admin',
            'email' => 'customer@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}
