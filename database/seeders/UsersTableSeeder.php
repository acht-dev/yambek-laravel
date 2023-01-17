<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 3; $i++) {
            User::create([
                'name'    => 'dwi ' . $i,
                'username'    => 'dwi' . rand(100, 999),
                'password'    => bcrypt('secret')
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
