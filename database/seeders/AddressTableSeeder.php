<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            Address::create([
                'address'    => 'jakarta ' . $i,
                'phone'    => '081288236770' . rand(100, 999),
                'is_primary'    =>true
            ]);
        }

        // User::create([
        //     'name'    => 'dwi',
        //     'username'    => 'dwi98',
        //     'password'    => bcrypt('secret')
        // ]);
        // User::create([
        //     'name'    => 'riri',
        //     'username'    => 'riri88',
        //     'password'    => bcrypt('secret')
        // ]);
        // User::create([
        //     'name'    => 'sindi',
        //     'username'    => 'sindi80',
        //     'password'    => bcrypt('secret')
        // ]);
        // User::create([
        //     'name'    => 'ayu',
        //     'username'    => 'ayun0',
        //     'password'    => bcrypt('secret')
        // ]);
        // User::create([
        //     'name'    => 'andriani',
        //     'username'    => 'jkn12',
        //     'password'    => bcrypt('secret')
        // ]);

    }
}
