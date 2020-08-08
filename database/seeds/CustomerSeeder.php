<?php

use App\Models\Customer;
use Illuminate\Database\Seeder;
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
        $datas = [
            [
                'name'=>'Cuong',
                'email'=>'vuduycuong996@gmail.com',
                'password' => Hash::make('123456'),
                'ward_id' => '1',
            ],
            [
                'name'=>'Phuoc',
                'email'=>'phuoc@gmail.com',
                'password' => Hash::make('123456'),
                'ward_id' => '1',
            ],
            [
                'name'=>'Thuan',
                'email'=>'thuan@gmail.com',
                'password' => Hash::make('123456'),
                'ward_id' => '1',
            ],
        ];
        foreach($datas as $data){
            $customer = Customer::create($data);
        }
    }
}
