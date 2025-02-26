<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['stok_id' => 1, 'barang_id' => 1, 'stok_jumlah' => 10],
            ['stok_id' => 2, 'barang_id' => 2, 'stok_jumlah' => 20],
            ['stok_id' => 3, 'barang_id' => 3, 'stok_jumlah' => 30],
            ['stok_id' => 4, 'barang_id' => 4, 'stok_jumlah' => 40],
            ['stok_id' => 5, 'barang_id' => 5, 'stok_jumlah' => 50],
            ['stok_id' => 6, 'barang_id' => 6, 'stok_jumlah' => 60],
            ['stok_id' => 7, 'barang_id' => 7, 'stok_jumlah' => 70],
            ['stok_id' => 8, 'barang_id' => 8, 'stok_jumlah' => 80],
            ['stok_id' => 9, 'barang_id' => 9, 'stok_jumlah' => 90],
            ['stok_id' => 10, 'barang_id' => 10, 'stok_jumlah' => 100],
        ];

        DB::table('t_stok')->insert($data);
    }
}