<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'S1',
                'supplier_nama' => 'PT. Elektronik Jaya',
                'supplier_alamat' => 'Jakarta',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'S2',
                'supplier_nama' => 'CV. Baju Murah',
                'supplier_alamat' => 'Bandung',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'S3',
                'supplier_nama' => 'UD. Makanan Sehat',
                'supplier_alamat' => 'Surabaya',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
