<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name'=>'admin',
            'email'=>'an@gmail.com',
            'phone_no'=>'9002341002',
            'address'=>'5-A , CakeBake Bakery',
            'state'=>'Mizoram',
            'city'=>'Aizawl',
            'pin_no'=>'796005',
            'password'=>Hash::make('ana'),
            ],
            [
                'name'=>'aditya',
                'email'=>'adi@gmail.com',
                'phone_no'=>'9002341002',
                'address'=>'2-C , cityhospital',
                'state'=>'Mizoram',
                'city'=>'Aizawl',
                'pin_no'=>'796005',
                'password'=>Hash::make('adi'),
            ],
        ]);
    }
}
