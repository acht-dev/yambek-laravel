<?php

namespace Database\Seeders;

use App\Models\Menus;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menus::create([
            'name'    => 'nasi',
            'description'    => 'nasi',
            'price'    => 5000,
            'durasi_penyajian'    => 2
        ]);
        Menus::create([
            'name'    => 'ayam goreng',
            'description'    => 'ayam goreng ada tambahan sambal dadakan, bumbu palengko dan lalapan',
            'price'    => 15000,
            'durasi_penyajian'    => 15
        ]);
        Menus::create([
            'name'    => 'ayam palengko',
             'description'    => 'ayam palengko ada tambahan sambal dadakan dan lalapan',
             'price'    => 10000,
             'durasi_penyajian'    => 10
         ]);
         Menus::create([
            'name'    => 'paket nasi ayam goreng',
            'description'    => 'nasi dengan ayam goreng ada tambahan sambal dadakan, bumbu palengko dan lalapan',
            'price'    => 20000,
            'durasi_penyajian'    => 20
        ]);
        Menus::create([
            'name'    => 'paket nasi ayam palengko',
            'description'    => 'nasi dengan ayam palengko ada tambahan sambal dadakan dan lalapan',
            'price'    => 15000,
            'durasi_penyajian'    => 5
        ]);
        Menus::create([
            'name'    => 'bebek palengko',
             'description'    => 'bebek palengko ada tambahan sambal dadakan dan lalapan',
             'price'    => 15000,
             'durasi_penyajian'    => 5
         ]);
         Menus::create([
            'name'    => 'paket nasi bebek palengko',
            'description'    => 'nasi dengan bebek palengko ada tambahan sambal dadakan dan lalapan',
            'price'    => 20000,
            'durasi_penyajian'    => 10
        ]);
        Menus::create([
            'name'    => 'ati ayam',
            'description'    => 'ati ayam ada tambahan sambal dadakan dan lalapan',
            'price'    => 8000,
            'durasi_penyajian'    => 5
        ]);
        Menus::create([
            'name'    => 'paket nasi ati ayam',
            'description'    => 'nasi dengan ati ayam tambahan sambal dadakan dan lalapan',
            'price'    => 13000,
            'durasi_penyajian'    => 10
        ]);
        Menus::create([
            'name'    => 'lele goreng',
            'description'    => 'lele goreng tambahan sambal dadakan dan lalapan',
            'price'    => 10000,
            'durasi_penyajian'    => 15
        ]);
        Menus::create([
            'name'    => 'paket nasi lele goreng',
            'description'    => 'nasi dengan lele goreng tambahan sambal dadakan dan lalapan',
            'price'    => 15000,
            'durasi_penyajian'    => 15
        ]);
        Menus::create([
            'name'    => 'tahu',
            'description'    => 'tahu goreng',
            'price'    => 2000,
            'durasi_penyajian'    => 2
        ]);
        Menus::create([
            'name'    => 'tempe',
            'description'    => 'tempe goreng',
            'price'    => 2000,
            'durasi_penyajian'    => 2
        ]);
        Menus::create([
            'name'    => 'sambal dadakan',
            'description'    => 'sambal dadakan',
            'price'    => 3000,
            'durasi_penyajian'    => 3
        ]);
        Menus::create([
            'name'    => 'es teh manis',
            'description'    => 'es teh manis',
            'price'    => 4000,
            'durasi_penyajian'    => 3
        ]);
        Menus::create([
            'name'    => 'es jeruk',
            'description'    => 'es jeruk',
            'price'    => 6000,
            'durasi_penyajian'    => 3
        ]);
        Menus::create([
            'name'    => 'jeruk hangat',
            'description'    => 'jeruk hangat',
            'price'    => 5000,
            'durasi_penyajian'    => 3
        ]);
        Menus::create([
            'name'    => 'air mineral',
            'description'    => 'air mineral',
            'price'    => 3000,
            'durasi_penyajian'    => 1
        ]);
        Menus::create([
            'name'    => 'es tea jus',
            'description'    => 'es tea jus',
            'price'    => 2000,
            'durasi_penyajian'    => 2
        ]);
        Menus::create([
            'name'    => 'es nutrisari',
            'description'    => 'es nutrisari',
            'price'    => 4000,
            'durasi_penyajian'    => 2
        ]);
        Menus::create([
            'name'    => 'es kopi',
            'description'    => 'es kopi',
            'price'    => 5000,
            'durasi_penyajian'    => 3
        ]);
    }
}
