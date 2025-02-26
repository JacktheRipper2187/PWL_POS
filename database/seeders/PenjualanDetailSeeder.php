<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $barangIds = range(1, 10);
        $penjualanIds = range(1, 10);

        foreach ($penjualanIds as $penjualanId) {
            $selectedBarangIds = array_rand(array_flip($barangIds), 3);
            foreach ($selectedBarangIds as $barangId) {
                $data[] = [
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    'jumlah' => rand(1, 5),
                    'harga' => DB::table('m_barang')->where('barang_id', $barangId)->value('harga_jual'),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}