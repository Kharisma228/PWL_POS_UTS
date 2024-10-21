<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Agus',
                'penjualan_kode' => 'P1',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 1,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'P2',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Wahyu',
                'penjualan_kode' => 'P3',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => 'Eko',
                'penjualan_kode' => 'P4',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 2,
                'pembeli' => 'Ahmad',
                'penjualan_kode' => 'P5',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 2,
                'pembeli' => 'Waluyo',
                'penjualan_kode' => 'P6',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 2,
                'pembeli' => 'Siti',
                'penjualan_kode' => 'P7',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Sifa',
                'penjualan_kode' => 'P8',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Rifqi',
                'penjualan_kode' => 'P9',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Budin',
                'penjualan_kode' => 'P10',
                'penjualan_tanggal' => '2024-09-14 00:00:00',
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
