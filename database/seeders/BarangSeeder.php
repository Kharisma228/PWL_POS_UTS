<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => '1',
                'barang_kode' => 'B1',
                'barang_nama' => 'Handphone',
                'harga_beli' => '1000000',
                'harga_jual' => '1500000',
            ],
            [
                'barang_id' => 2,
                'kategori_id' => '1',
                'barang_kode' => 'B2',
                'barang_nama' => 'Smartwatch',
                'harga_beli' => '1000000',
                'harga_jual' => '1500000',
            ],
            [
                'barang_id' => 3,
                'kategori_id' => '1',
                'barang_kode' => 'B3',
                'barang_nama' => 'Mesin Cuci',
                'harga_beli' => '1000000',
                'harga_jual' => '1500000',
            ],
            [
                'barang_id' => 4,
                'kategori_id' => '1',
                'barang_kode' => 'B4',
                'barang_nama' => 'Blender',
                'harga_beli' => '1000000',
                'harga_jual' => '1500000',
            ],
            [
                'barang_id' => 5,
                'kategori_id' => '1',
                'barang_kode' => 'B5',
                'barang_nama' => 'Setrika',
                'harga_beli' => '1000000',
                'harga_jual' => '1500000',
            ],
            [
                'barang_id' => 6,
                'kategori_id' => '3',
                'barang_kode' => 'B6',
                'barang_nama' => 'Mie Indomie',
                'harga_beli' => '5000',
                'harga_jual' => '6000',
            ],
            [
                'barang_id' => 7,
                'kategori_id' => '3',
                'barang_kode' => 'B7',
                'barang_nama' => 'Pop Mie',
                'harga_beli' => '5000',
                'harga_jual' => '6000',
            ],
            [
                'barang_id' => 8,
                'kategori_id' => '4',
                'barang_kode' => 'B8',
                'barang_nama' => 'Air Mineral',
                'harga_beli' => '5000',
                'harga_jual' => '6000',
            ],
            [
                'barang_id' => 9,
                'kategori_id' => '4',
                'barang_kode' => 'B9',
                'barang_nama' => 'Sprite',
                'harga_beli' => '5000',
                'harga_jual' => '6000',
            ],
            [
                'barang_id' => 10,
                'kategori_id' => '4',
                'barang_kode' => 'B10',
                'barang_nama' => 'Susu',
                'harga_beli' => '5000',
                'harga_jual' => '6000',
            ],
            [
                'barang_id' => 11,
                'kategori_id' => '2',
                'barang_kode' => 'B11',
                'barang_nama' => 'Kemeja',
                'harga_beli' => '100000',
                'harga_jual' => '150000',
            ],
            [
                'barang_id' => 12,
                'kategori_id' => '2',
                'barang_kode' => 'B12',
                'barang_nama' => 'Kaos',
                'harga_beli' => '100000',
                'harga_jual' => '150000',
            ],
            [
                'barang_id' => 13,
                'kategori_id' => '2',
                'barang_kode' => 'B13',
                'barang_nama' => 'Celana Panjang',
                'harga_beli' => '100000',
                'harga_jual' => '150000',
            ],
            [
                'barang_id' => 14,
                'kategori_id' => '2',
                'barang_kode' => 'B14',
                'barang_nama' => 'Daster',
                'harga_beli' => '100000',
                'harga_jual' => '150000',
            ],
            [
                'barang_id' => 15,
                'kategori_id' => '2',
                'barang_kode' => 'B15',
                'barang_nama' => 'Baju Bayi',
                'harga_beli' => '100000',
                'harga_jual' => '150000',
            ],

        ];
        DB::table('m_barang')->insert($data);
    }
}
