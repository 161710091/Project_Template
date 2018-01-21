<?php

use Illuminate\Database\Seeder;

class data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
        		['Kode_Barang'=>'1234', 'Nama_Barang'=>'Aqua', 'Harga'=>500],
                ['Kode_Barang'=>'5678', 'Nama_Barang'=>'Snack', 'Harga'=>1000]
        ];

            DB::table('data')->insert($a);

    }
}
