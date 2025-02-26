<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'penjualan_tanggal' => now(), 'penjualan_total' => 150000],
            ['penjualan_id' => 2, 'user_id' => 2, 'penjualan_tanggal' => now(), 'penjualan_total' => 200000],
            ['penjualan_id' => 3, 'user_id' => 3, 'penjualan_tanggal' => now(), 'penjualan_total' => 250000],
            ['penjualan_id' => 4, 'user_id' => 1, 'penjualan_tanggal' => now(), 'penjualan_total' => 300000],
            ['penjualan_id' => 5, 'user_id' => 2, 'penjualan_tanggal' => now(), 'penjualan_total' => 350000],
            ['penjualan_id' => 6, 'user_id' => 3, 'penjualan_tanggal' => now(), 'penjualan_total' => 400000],
            ['penjualan_id' => 7, 'user_id' => 1, 'penjualan_tanggal' => now(), 'penjualan_total' => 450000],
            ['penjualan_id' => 8, 'user_id' => 2, 'penjualan_tanggal' => now(), 'penjualan_total' => 500000],
            ['penjualan_id' => 9, 'user_id' => 3, 'penjualan_tanggal' => now(), 'penjualan_total' => 550000],
            ['penjualan_id' => 10, 'user_id' => 1, 'penjualan_tanggal' => now(), 'penjualan_total' => 600000],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}